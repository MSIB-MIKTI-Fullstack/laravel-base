<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function coba (){
        $teks = "ini teks di controller";
        echo $teks;
    }

    public function view(){
        $teks = "ini teks controller";

        return view('view',['teks' => $teks]);
    }
    public function beranda(Request $request){
        $products = Product::with('product_category')->where('product_category_id', $request->category_id)->get();
        //dd($products);
        return view('customers.product', compact('products'));
    }

}
