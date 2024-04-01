<?php

use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\LandingPage\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('about', function () {
    return "Hello";
});

Route::resource('users', UserController::class);
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');