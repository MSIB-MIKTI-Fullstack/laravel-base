<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function coba()
    {
        echo "Ini percobaan nya";
    }
    public function index()
    {
        return view('home');
    }
    public function beranda(Request $request)
    {
        $products = Product::with(['product_category'])->where('product_category_id', $request->category_id)->get();
        return view('costumers.product', compact('products'));
    }
}
