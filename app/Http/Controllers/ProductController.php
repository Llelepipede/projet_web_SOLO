<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        $products = products::all();

        return view('/allproduct', [
            'products' => $products
        ]);
    }
}
