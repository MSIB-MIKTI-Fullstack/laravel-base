<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;
use App\Http\Controllers\CustomerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['as' => 'customer.'], function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
