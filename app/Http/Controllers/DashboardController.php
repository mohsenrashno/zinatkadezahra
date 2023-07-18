<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

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
}
