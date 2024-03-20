<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ContohController extends Controller
{
    public function contoh()
    {
        return view('contoh');
    }
}
