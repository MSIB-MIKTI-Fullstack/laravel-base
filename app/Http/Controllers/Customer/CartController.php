<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // $carts = Cart::selectRaw('SUM(qty) as total_qty, name, description, price, image')
        // ->leftJoin('products', 'products.id', '=', 'carts.product_id')
        // ->where('user_id', Auth::user()->id)
        // ->groupBy('product_id')
        // ->get();

        $carts = Cart::getCartByUser()
            ->get();

        return view('customers.cart', compact('carts'));
    }
}
