<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;
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
        Route::post('/add_to_cart', [ProductController::class, 'addToCart'])->name('product-add-to-cart');
    });
   
});
    Route::middleware('auth')->group(function () {
        Route::group(['prefix' => '/cart', 'as' => 'cart.'], function () {
            Route::get('/', [CartController::class, 'index'])->name('index');
            Route::get('/total-cart', [CartController::class, 'getTotalCart'])->name('cart.total-cart');
            Route::post('/change-art', [CartController::class, 'changeCart'])->name('cart.change-cart');
            Route::get('/get-cart', [CartController::class, 'getCart'])->name('cart.get-cart');
            Route::delete('/delete-cart', [CartController::class, 'deleteCart'])->name('cart.delete-cart');
        });

        Route::group(['prefix' => '/checkout', 'as' => 'checkout.'], function () {
            Route::get('/', [CheckoutController::class, 'index'])->name('index');
            Route::post('process', [CheckoutController::class, 'process'])->name('process');
        });
});
   
});
