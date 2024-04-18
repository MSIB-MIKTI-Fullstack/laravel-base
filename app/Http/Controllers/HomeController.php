<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Tambahkan use statement untuk model Product

class HomeController extends Controller
{
    public function products(Request $request)
    {
        $products = Product::with(['product_category'])
            ->when($request->category_id !== "", function ($query) use ($request) { // Berikan alias $query pada closure
                $query->where('product_category_id', $request->category_id);
            })->paginate(10);

        return view('customers.product', compact('products'));
    }
}
