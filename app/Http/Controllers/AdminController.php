<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin.dashboard');
    }
    public function products()
    {
        return view('layouts.admin.products');
    }
}
