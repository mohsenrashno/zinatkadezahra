<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use DB;

class OrderController extends Controller
{
    public function register(Request $request)
    {
        $user_id = $request->id;
        $role = User::find($user_id)->role;
        $product_id = Product::where('name', $request->productname)->first()->id;
        $order_id = null;
        $price = Product::find($product_id)->price;
        $tailor_id_default = User::all()->where('role', 'tailor')->random()->id;

        // return dd(Carbon\Carbon::now());
        $lastOrder = User::find($user_id)->orders();
        if ($lastOrder->get()->last() != null && $lastOrder->get()->last()->paiddate == null) {
            $order_id = $lastOrder->get()->last()->id;
        } else {
            $current_date = date("Y-m-d") . " " . date("h:i:s");
            $temp = Order::Create(['user_id' => $user_id, 'orderdate' => $current_date]);
            $order_id = $temp->id;
        }


        $data = array('order_id' => $order_id, 'product_id' => $product_id, 'user_id' => $tailor_id_default, 'count' => 1, 'price' => $price);
        $t = DB::table('order_product')->insert($data);

        //for update sum of price
        $new_price = Order::find($order_id)->price;
        $new_price = $new_price + $price;
        $r = DB::table('orders')->where('id', $order_id)->update(array('price' => $new_price));

        //  return dd($t);

        return view('welcome', ['role' => $role]);

    }
}