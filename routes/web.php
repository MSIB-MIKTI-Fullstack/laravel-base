<?php

use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\CheckoutController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;
use App\Http\Controllers\CustomerController;
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

// route::get('/coba', function () {
//     echo 'belajar routing dengan laravel';
// });

// route::prefix('/halaman')->group(function () {
//     route::get('/home', [HomeController::class, 'index'])->name('halaman.home');
//     route::get('/dashboard', [HomeController::class, 'dashboard'])->name('halaman.dashboard');
// });

// route::resources([
//     'user' => UserController::class,
// ]);

// route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
// Route::get('admin/products', [AdminController::class, 'products'])->name('admin.products');

// route::view('view-component', 'view-component.dashboard')->name('view.admin.dashboard');
// route::view('view-component/products', 'view-component.products')->name('view.admin.products');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['as' => 'customer.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products');
        Route::get('/{slug}', [ProductController::class, 'detail'])->name('products-detail');

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

        Route::group(['prefix' => '/checkout', 'as' => 'checkout.'], function () {
            Route::get('/', [CheckoutController::class, 'index'])->name('index');
            Route::post('/process', [CheckoutController::class, 'process'])->name('process');
            Route::get('/get-province', [CheckoutController::class, 'getProvince'])->name('get-province');
            Route::get('/get-city', [CheckoutController::class, 'getCity'])->name('get-city');
            Route::get('/get-cost', [CheckoutController::class, 'getCost'])->name('get-cost');
        });
    });
});
