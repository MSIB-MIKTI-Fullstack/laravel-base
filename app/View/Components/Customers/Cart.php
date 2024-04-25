<?php

namespace App\View\Components\Customers;

use App\Models\Cart as ModelsCart;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Cart extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $cart = DB::selectOne("SELECT COUNT(c.product_id) as count FROM (SELECT product_id FROM `carts` WHERE user_id = :user_id GROUP BY product_id) as c;", ['user_id' => Auth::user()->id]);

        $count = $cart->count;

        return view('components.customers.cart', compact('count'));
    }
}