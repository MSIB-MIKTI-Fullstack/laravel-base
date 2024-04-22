<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class HomeController extends RoutingController
{
    public function index()
    {
        $products = Product::with(['product_category'])
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        return view('customers.home', compact('products'));
    }
}