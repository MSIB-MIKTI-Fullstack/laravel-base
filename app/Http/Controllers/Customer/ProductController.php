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
        ->when($request->category_id != "", function($q) use ($request){
            $q->where('product_category_id', $request->category_id);
        })
        ->paginate(10)
        ->appends($request->query());
        return view('costumers.product', compact('products'));
    }

    public function detail($slug)
    {
        $product = Product::with(['product_category'])->where('slug', $slug)->first();
        return view('costumers.product-detail', compact('product'));
    }
    public function addToCart(Request $request)
    {
        try {
            Cart::create([
                'product_id' => $request->product_id,
                'qty' => $request->qty,
                'user_id' => Auth::user()->id, 
            ]);
            return redirect()->back()->with('success' , 'Add product to cart succesfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error' ,$th->getMessage());
        }
    }
}
