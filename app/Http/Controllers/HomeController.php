<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function coba()
    {
        echo "Ini percobaan nya";
    }
    public function index()
    {
        return view('home');
    }
}
