<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request)
    {
        $productname = $request->name;
        return view('product',['productname' => $productname]);
    }
}
