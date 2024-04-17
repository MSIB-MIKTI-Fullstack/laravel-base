<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function products(Request $request)
    {
        $products = Product::with(['product_category'])
        ->when($request->category_id != "", function($q) use ($request){
            $q->where('product_category_id', $request->category_id);
        })->paginate(10);
        return view('costumers.product', compact('products'));
    }
}
