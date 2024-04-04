<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda(Request $request)
    {
        $products = Product::where('product_category_id', $request->category_id)->get();
        return view('customers.product', compact('products'));
    }
}