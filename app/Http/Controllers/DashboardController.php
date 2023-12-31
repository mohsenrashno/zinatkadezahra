<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;

use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    static public function role()
    {
        $role = 0;
        $user = auth()->user();
        if ($user != null) {
            $role = User::find($user->id)->role;
        }
        return view('welcome', ['role' => $role]);
    }

    public function customer()
    {
        $user_id = auth()->user()->id;
        $orders = User::find($user_id)->orders()->get();
        $products = null;
        foreach ($orders as $temp) {
            $products = Order::find($temp->id)->products()->get();
        }
        //  $products = Order::find($orders->first()->id)->products()->first();
        //  return dd($orders);

        return view('dashboard_customer', ['orders' => $orders, 'products' => $products]);
    }



    public function tailor()
    {
        $user_id = auth()->user()->id;
        // $customers = User::where('role', 'customer')->get();
        // $tailors = User::where('role', 'tailor')->get();
        // $products = Product::all();
        $all_work = DB::table('order_product')->where('user_id', $user_id)->get();
        $count_work = 0;
        $sum_price = 0;
        foreach ($all_work as $work) {
            $count_work = $count_work + 1;
            $temp_price = Product::find($work->product_id)->price;
            $sum_price = $sum_price + $temp_price;
        }
        $sum_price = round($sum_price);

        // foreach ($all_work as $work) {
        //     $product = Product::find($work->product_id);
        //     $order = Order::find($work->order_id);
        //     echo $work->order_id;
        //     echo ' ';
        //     echo $order->id;
        //     echo ' ';
        // }

        // return dd(100);

        return view('dashboard_tailor', [
            'all_work' => $all_work,
            'count_work' => $count_work,
            'sum_price' => $sum_price
        ]);
    }


    static public function products($order_id)
    {
        $products = Order::find($order_id)->products()->get();
        return $products;
    }

    public function payment(Request $request)
    {
        //  return dd($request->payment);
        //  $r = DB::update('update orders set price = 23000');
        // $r = DB::update('update orders set paiddate = 100 where id = ?', array($request->id));
        //$r = DB::insert('insert into orders (id, paiddate) values (?, ?)', array($request->id, '1402-02-30'));
        $current_date = date("Y-m-d") . " " . date("h:i:s");
        $r = DB::table('orders')->where('id', $request->order_id)->update(array('paiddate' => $current_date, 'paidstatus' => $request->payment));
        //    $r = DB::table('orders')->where('id', $request->id)->update(array());

        return DashboardController::role();
    }

    public function preparing(Request $request)
    {
        //  $r = DB::update('update orders set price = 23000');
        // $r = DB::update('update orders set paiddate = 100 where id = ?', array($request->id));
        //$r = DB::insert('insert into orders (id, paiddate) values (?, ?)', array($request->id, '1402-02-30'));
        $current_date = date("Y-m-d") . " " . date("h:i:s");
        $r = DB::table('orders')->where('id', $request->order_id)->update(array('preparingdate' => $current_date));
        //    $r = DB::table('orders')->where('id', $request->id)->update(array());

        return redirect()->back();
    }

    public function finished(Request $request)
    {
        //  $r = DB::update('update orders set price = 23000');
        // $r = DB::update('update orders set paiddate = 100 where id = ?', array($request->id));
        //$r = DB::insert('insert into orders (id, paiddate) values (?, ?)', array($request->id, '1402-02-30'));
        $current_date = date("Y-m-d") . " " . date("h:i:s");
        $r = DB::table('orders')->where('id', $request->order_id)->update(array('finisheddate' => $current_date));
        //    $r = DB::table('orders')->where('id', $request->id)->update(array());

        return redirect()->back();
    }

    public function delivery(Request $request)
    {
        //  $r = DB::update('update orders set price = 23000');
        // $r = DB::update('update orders set paiddate = 100 where id = ?', array($request->id));
        //$r = DB::insert('insert into orders (id, paiddate) values (?, ?)', array($request->id, '1402-02-30'));
        $current_date = date("Y-m-d") . " " . date("h:i:s");
        $r = DB::table('orders')->where('id', $request->order_id)->update(array('deliverydate' => $current_date));
        //    $r = DB::table('orders')->where('id', $request->id)->update(array());

        return redirect()->back();
    }

    public function canceled(Request $request)
    {
        $current_date = date("Y-m-d") . " " . date("h:i:s");
        DB::table('orders')->where('id', $request->order_id)->update(array('canceleddate' => $current_date));
        return redirect()->back();
    }
    public function cart(Request $request)
    {
        $order_id = $request->order;
        $user_id = auth()->user()->id;
        $order = Order::find($order_id);
        $products = Order::find($order_id)->products()->get();
        $address = User::find($user_id)->address;

        $role = User::find($user_id)->role;


        return view('cart', [
            'order' => $order,
            'products' => $products,
            'address' => $address,
            'role' => $role
        ]);
    }

    public function admin()
    {
        $user_id = auth()->user()->id;
        $customers = User::where('role', 'customer')->get();
        $tailors = User::where('role', 'tailor')->get();
        $orders = Order::all();
        $products = Product::all();
        $order_product = DB::table('order_product')->get();


        return view('dashboard_admin', [
            'user_id' => $user_id,
            'customers' => $customers,
            'tailors' => $tailors,
            'orders' => $orders,
            'products' => $products,
            'order_product' => $order_product
        ]);
    }

    public function select_tailor(Request $request)
    {
        $tailor_id = $request->tailor_id;
        $order_product_id = $request->order_product_id;

        DB::table('order_product')->where('id', $order_product_id)->update(array('user_id' => $tailor_id));

        return redirect()->back();
    }




}