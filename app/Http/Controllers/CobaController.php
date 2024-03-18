<?php

namespace App\Http\Controllers;

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
}
