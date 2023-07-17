<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Auth;

class ProductController extends Controller
{
    public function show(Request $request)
    {
        $productname = $request->name;

        $temp = Product::where('name', $productname)->first()->id;
        $picturename = Product::find($temp)->pictures()->first();


        if($picturename!=null)
            $picturename = $picturename->path;

            return view('product',['productname' => $productname, 'picturename' => $picturename]);
    }
}
