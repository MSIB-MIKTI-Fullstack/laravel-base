<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['product_category'])
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        return view('customer.home.index', compact('products'));
    }
}
