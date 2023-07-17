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
        $product_id = Product::where('name', $request->productname)->first()->id;
        $order_id = null;
        $price = 0;

       // return dd(Carbon\Carbon::now());
        $lastOrder = User::find($user_id)->orders();
        if($lastOrder->get()->last() != null && $lastOrder->get()->last()->paiddate == null)
        {
            $order_id = $lastOrder->get()->last()->id;
        }
        else
        {
            $temp = Order::Create(['user_id' => $user_id, 'orderdate' => '1402-04-23']);
            $order_id = $temp->id;
            
        }


        $data=array('order_id'=>$order_id,"product_id"=>$product_id,"user_id"=>$user_id,"price"=>$price);
        $t = DB::table('order_product')->insert($data);

      //  return dd($t);

        return view('welcome');

    }
}
