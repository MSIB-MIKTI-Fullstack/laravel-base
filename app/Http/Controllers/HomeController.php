<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function testing()
    {
        return view('home');
    }

    public function beranda(Request $request)
    {
        $products = Product::with(['product_category'])->where('product_category_id', $request->category_id)->get();

        return view('customers.product', compact('products'));
    }
}

