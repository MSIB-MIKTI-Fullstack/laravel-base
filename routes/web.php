<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aldi', function () {
    return "<h1>SAYA ALDI</h1>";
});

Route::get('/home', [HomeController::class, 'testing']);

Route::get('/dashboard', function () {
    return view('dashboard', ['name' => 'Renaldi'], ['tglLahir' => date('d-m-Y')]);
});
