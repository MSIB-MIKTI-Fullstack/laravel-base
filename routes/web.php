<?php

use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserResourceController;

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

Route::resources([
    'users' => UserResourceController::class,
]);

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
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('/products')->group(function() {
        Route::get('/', [ProductController::class, 'index'])->name('products');
        Route::get('/{slug}', [ProductController::class, 'detail'])->name('product-detail');
        Route::middleware('auth')->group(function () {
            Route::post('/add-to-cart', [ProductController::class, 'addToCart'])->name('product-add-to-cart');
        });
    });
});
