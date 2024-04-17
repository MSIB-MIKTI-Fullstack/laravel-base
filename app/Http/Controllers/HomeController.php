<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Service\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function products(Request $request)
    {
        $products = Product::with(['product_category'])
            ->when($request->category_id != "", function ($q) use ($request) {
                $q->where('product_category_id', $request->category_id);
            })->get();

        return view('customers.product', compact('products'));
    }
}
