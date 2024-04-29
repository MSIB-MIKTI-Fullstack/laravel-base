<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use GuzzleHttp\Psr7\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::getCartByUser()
            ->get();

        return view('customers.cart', compact('carts'));
    }

    public function changeCart(Request $request)
    {
    }
}
