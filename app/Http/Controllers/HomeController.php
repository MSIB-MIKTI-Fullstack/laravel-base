<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function testing()
    {
        return view('home');
    }

    public function beranda()
    {
        return view('customers.product');
    }
}

