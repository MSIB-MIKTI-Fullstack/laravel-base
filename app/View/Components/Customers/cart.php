<?php

namespace App\View\Components\customers;

use App\Models\Cart as ModelsCart;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class cart extends Component
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
        // $cart_count = DB::table(DB::raw("(SELECT product_id FROM carts WHERE user_id = :user_id GROUP BY product_id) as c"))
        //     ->selectRaw("COUNT(c.product_id) as count")
        //     ->setBindings(['user_id' => Auth::user()->id], 'where')
        //     ->first()->count;

        $cart_count = ModelsCart::where('user_id', Auth::user()->id)
            ->distinct('product_id')
            ->count();

        return view('components.customers.cart', compact('cart_count'));
    }
}
