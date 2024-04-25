<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['product_category'])->orderBy('created_at', 'desc')->take(8)->get();

        return view('customers.home', compact('products'));
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('customers.product-detail', compact('product'));
    }
}
