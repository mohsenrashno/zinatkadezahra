<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request )
    {
        return dd($request->name);
    }
}
=======

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProductController extends Controller
{
    public function show(Request $request)
    {
        $productname = $request->name;

        $temp = Product::where('name', $productname)->first()->id;
        $picturename = Product::find($temp)->pictures()->first();
        $price = Product::find($temp)->price;
        $producttype = Product::find($temp)->type;

        if ($picturename != null)
            $picturename = $picturename->path;

        return view('product', ['productname' => $productname, 'picturename' => $picturename, 'price' => $price, 'producttype' => $producttype]);
    }

    public function product_register(Request $request)
    {
        DB::table('products')->insert(
            ['name' => $request->name, 'type' => $request->type, 'size' => $request->size, 'price' => $request->price]
        );
        return redirect()->back();
    }
    public function product_list()
    {
        $user = auth()->user();
        $role = null;
        if ($user != null) {
            $role = User::find($user->id)->role;
        }


        $products = Product::all();
        return view('product_list', ['products' => $products, 'role' => $role]);
    }
    public function single_product(Request $request)
    {
        $user = auth()->user();
        $role = null;
        $is_customer = false;
        if ($user != null) {
            $role = User::find($user->id)->role;
            if ($role == 'customer') {
                $is_customer = true;
            }
        }


        $product_id = $request->product_id;

        $product = Product::find($product_id);
        return view('single-product', ['product' => $product, 'is_customer' => $is_customer, 'role' => $role]);
    }

    public function about(Request $request)
    {
        $user = auth()->user();
        $role = null;
        if ($user != null) {
            $role = User::find($user->id)->role;
        }
        return view('about', ['role' => $role]);
    }

    public function contact(Request $request)
    {
        $user = auth()->user();
        $role = null;
        if ($user != null) {
            $role = User::find($user->id)->role;
        }

        return view('contact', ['role' => $role]);
    }
}
>>>>>>> detached-head
