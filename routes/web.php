<?php

use App\Http\Controllers\Customer\CartController;
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

    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products');
        Route::get('/{slug}', [ProductController::class, 'detail'])->name('product-detail');

        Route::middleware('auth')->group(function () {
            Route::post('/add-to-cart', [ProductController::class, 'addToCart'])->name('product-add-to-cart');
        }); 
    });

    Route::middleware('auth')->group(function () {
        Route::group(['prefix' => '/cart', 'as' => 'cart.'], function () {
            Route::get('/', [CartController::class, 'index'])->name('index');
            Route::get('/total-cart', [CartController::class, 'getTotalCart'])->name('total-cart');
            Route::post('/change-cart', [CartController::class, 'changeCart'])->name('change-cart');
            Route::get('/get-cart', [CartController::class, 'getCart'])->name('get-cart');
            Route::delete('/delete-cart', [CartController::class, 'deleteCart'])->name('delete-cart');
        });
    });
});