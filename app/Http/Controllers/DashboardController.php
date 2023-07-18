<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{ 
    public function role()
    {
        $role = 0;
        $user = auth()->user();
        if($user != null)
        {
            $role = User::find($user->id)->role; 
        }
        return view('welcome',['role' => $role]);
    }

    public function customer()
    {
        $user_id = auth()->user()->id;
        $orders = User::find($user_id)->orders()->get();
        $products = null;
        foreach($orders as $temp)
        {
            $products = Order::find($temp->id)->products()->get();
        }
      //  $products = Order::find($orders->first()->id)->products()->first();
    
      //  return dd($orders);
    
        return view('dashboard_customer', ['orders'=>$orders, 'products'=>$products]);
    }


    static public function products($order_id)
    {
        $products = Order::find($order_id)->products()->get();
        return  $products;
    }

    public function payment(Request $request)
    {
      //  $r = DB::update('update orders set price = 23000');
        // $r = DB::update('update orders set paiddate = 100 where id = ?', array($request->id));
       //$r = DB::insert('insert into orders (id, paiddate) values (?, ?)', array($request->id, '1402-02-30'));
       $current_date = date("Y-m-d")." ". date("h:i:s");
       $r = DB::table('orders')->where('id', $request->id)->update(array('paiddate' => $current_date));
        return redirect()->back();

    }
}
