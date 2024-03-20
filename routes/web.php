<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\halamancontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// 127.0.0.1:8000/ ==> view welcome
Route::get('/', function () {
    return view('welcome');
});


Route::get('/belajar', function () {
    return '<h1>Saya Indah Oktavia Belajar Routing</h1>';
});

Route::get('/halaman', function () {
    return view('halaman');
});

Route::get('/halamanku', function () {
    return view('halaman' , ['judul' => 'Mari Belajar Routing Di Laravel']);
});
 
Route::get('/halaman', [halamanController::class, 'index']);
