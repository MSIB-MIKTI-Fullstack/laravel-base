<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $products = Product::with(['product_category'])
            ->when($request->category_id != "", function ($q) use ($request) {
                $q->where('product_category_id', $request->category_id);
            })->paginate(10)
            ->appends($request->query());


        if (Auth::check()) {
            return view('customers.product', compact('products'));
        } else {
            return Redirect::to(config('internet'));
        }
    }

    public function detail($slug)
    {
        $product = Product::with(['product_category'])->where('slug', $slug)->first();

        return view('customers.product-detail', compact('product'));
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'qty' => 'integer|min:1'
        ]);

        try {
            $cart = Cart::where('product_id', $request->product_id)->where('user_id', Auth::user()->id);

            if ($cart->exists()) {
                $data = $cart->first();

                $cart->update([
                    'qty' => $data->qty + $request->qty
                ]);
            } else {
                Cart::create([
                    'product_id' => $request->product_id,
                    'user_id' => Auth::user()->id,
                    'qty' => $request->qty
                ]);
            }


            $count = Cart::where('user_id', Auth::user()->id)
                ->distinct('product_id')
                ->count();

            return response()->json(['message' => 'Add product to cart succesfuly', 'cart_count' => $count], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }
}
