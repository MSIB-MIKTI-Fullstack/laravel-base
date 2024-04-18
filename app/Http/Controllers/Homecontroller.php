<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home(){

        $products = Product::orderBy('created_at', 'desc')
        ->orderBy('created_at', 'desc')
        ->take(8)
        ->get();
        return view('customers.home', compact('products'));
    }

    public function products(Request $request)
    {
        $products = Product::with(['product_category'])
            ->when($request->category_id != "", function ($q) use ($request) {
                $q->where('product_category_id', $request->category_id);
            })->paginate(8);
        
        return view('customers.product', compact('products'));
    }
}
