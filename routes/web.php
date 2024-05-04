<?php

use App\Http\Controllers\Customer\HomeController as CustomerHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('Customer');
Route::resource('/products', ProductController::class)->middleware('auth');
Route::resource('/', CustomerHomeController::class)->middleware('auth');

//Route::get('/products', [CustomerHomeController::class, 'products'])->name('customer.products');//
Route::get('/', [CustomerHomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products');

