<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Service\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __construct(
        protected MailService $mail
    ) {
    }

    public function coba()
    {
        echo "Halaman coba";
    }

    public function testing(MailService $mail)
    {
        $teks = "Ini teks dari controller";

        // return view('beranda', ['teks' => $teks]);
        return view('beranda', compact('teks'));
    }


    public function beranda(Request $request)
    {
        $products = Product::with(['product_category'])->where('product_category_id', $request->category_id)->get();

        return view('customers.product', compact('products'));
    }

    public function readFile($filename)
    {
        return response()->file("design-system/assets/images/{$filename}");
    }
}