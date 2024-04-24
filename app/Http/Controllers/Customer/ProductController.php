<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['product_category'])
            ->when($request->category_id != "", function ($q) use ($request) {
                $q->where('product_category_id', $request->category_id);
            })->paginate(8)
            ->appends($request->query());

        return view('customers.product', compact('products'));
    }

    public function detail($slug)
    {
        $product = Product::with(['product_category'])->where('slug', $slug)->first();  //first() mengambil data pertama yg ditemukan, jadi ketika utk manggil route di blade tidak perlu di foreach

        return view('customers.product-detail', compact('product'));
    }

    public function addToCart(Request $request)
    {
        $products = Product::with(['product_category'])
            ->where('name', 'like', '%' . $request->keyword . '%')
            ->paginate(8)
            ->appends($request->query());

        return view('customers.product', compact('products'));
    }
}