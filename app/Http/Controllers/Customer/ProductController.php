<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['product_category'])
            ->when($request->category_id != "", function ($q) use ($request) {
                $q->where('product_category_id', $request->category_id);
            })->paginate(10)
            ->appends($request->query());

        return view('customers.product', compact('products'));
    }

    public function detail($slug)
    {
        $product = Product::with(['product_category'])->where('slug', $slug)->first();

        return view('customers.product-detail', compact('product'));
    }

    public function addToCart(Request $request)
    {
        try {
            Cart::create([
                'product_id' => $request->product_id,
                'user_id' => Auth::user()->id,
                'qty' => $request->qty
            ]);

            return redirect()->back()->with('success', 'Add product to cart succesfuly');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}