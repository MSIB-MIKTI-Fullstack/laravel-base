<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    
    public function index(){
        $products = Product::orderBy('created_at', 'desc')
        ->orderBy('created_at', 'desc')
        ->take(8)
        ->get(); //get perlu foreach di blade, kalau first tidak perlu foreach
        return view('customers.home', compact('products'));
    }
}
