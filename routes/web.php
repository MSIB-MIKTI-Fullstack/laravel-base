<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\UsersController;
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
// 127.0.0.1:8000/ ==> view welcome
Route::get('/', function () {
    dd('tes');
    return view('welcome');
  
});


Route::resources([
    'users' => UsersController::class
]);


