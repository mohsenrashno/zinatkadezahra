<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;

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
}