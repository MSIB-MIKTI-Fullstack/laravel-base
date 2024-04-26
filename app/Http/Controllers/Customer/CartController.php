<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {

        $cart = Cart::where('user_id', Auth::user()->id)->distinct('product_id')->toArray();
        return view('customers.cart');
    }
}
