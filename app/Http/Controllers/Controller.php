<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        $teks = "Passing data dari controller";
        return view('dashboard', compact('teks'));
    }
}