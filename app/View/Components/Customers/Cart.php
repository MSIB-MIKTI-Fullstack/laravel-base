<?php

namespace App\View\Components\Customers;

<<<<<<< HEAD
use App\Models\Cart as ModelsCart;
use Closure;
=======
use Closure;
use App\Models\Cart as ModelsCart;
>>>>>>> origin/rafa
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
        $count = ModelsCart::where('user_id', Auth::user()->id)
            ->distinct('product_id')
            ->count();
<<<<<<< HEAD

=======
>>>>>>> origin/rafa
        return view('components.customers.cart', compact('count'));
    }
}
