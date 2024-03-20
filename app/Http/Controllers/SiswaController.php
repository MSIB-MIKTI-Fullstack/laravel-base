<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siswaController extends Controller
{
    //
    function index(){
        return '<h1>saya siswa dari controller</h1>';
    }
    function detail($id){
        return "<h1>saya siswa dari controller dengan id $id</h1>";
    }
}
