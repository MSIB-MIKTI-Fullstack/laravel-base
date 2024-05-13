<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\CheckoutController;
use App\Http\Controllers\Customer\TransactionController;
use App\Models\Cart;
use GuzzleHttp\Handler\Proxy;   


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
Route::get('/user/{$id}', [UserController::class, 'show']); // ('/URI namanya') $id adalah parameter yg akan diambil dari url


//route group marketplaces halaman admin
Route::get('/create', function () {
    return view('users.layout.create'); 
});

Route::get('/admin', function(){
    return view('users.layout.index');
});



//php artisan route:cache


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//route group marketplaces halaman customer
Route::group(['as' => 'customer.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::prefix('/products')->group(function() {
        Route::get('/', [ProductController::class, 'index'])->name('products');
        Route::post('/add-to-cart', [ProductController::class, 'addToCart'])->name('product-add-to-cart');
        Route::get('/{slug}', [ProductController::class, 'detail'])->name('product-detail'); //name harus sesuai dgn nama di view digunakan untuk memanggil route di view blade
        Route::get('/cart', [CartController::class, 'index'])->name('cart');

        Route::middleware(['auth'])->group(function () {
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

        Route::group(['prefix' => '/transaction', 'as' => 'transaction.'], function () {
            Route::get('/', [TransactionController::class, 'index'])->name('index');
            Route::get('/datatable', [TransactionController::class, 'datatable'])->name('datatable');
        });

        
    
    });
   
});

