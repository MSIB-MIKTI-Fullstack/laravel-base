<?php

use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;
use Illuminate\Support\Facades\Route;


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
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/products/{slug}', [ProductController::class, 'detail'])->name('product-detail');
});
