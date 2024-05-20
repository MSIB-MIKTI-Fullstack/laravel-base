<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\CheckoutController;
use App\Http\Controllers\Customer\TransactionController;
use App\Http\Controllers\ProductController as ControllersProductController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


// Rute CRUD untuk Barang


Route::get('/barangs', [BarangController::class, 'index'])->name('crud.index');
Route::get('/barangs/create', [BarangController::class, 'create'])->name('crud.create');
Route::post('/barangs', [BarangController::class, 'store'])->name('crud.store');
Route::get('/barangs/{id}', [BarangController::class, 'show'])->name('crud.show');
Route::get('/barangs/{id}/edit', [BarangController::class, 'edit'])->name('crud.edit');
Route::put('/barangs/{id}', [BarangController::class, 'update'])->name('crud.update');
Route::delete('/barangs/{id}', [BarangController::class, 'destroy'])->name('crud.destroy');


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
            Route::post('/upload-receipt', [TransactionController::class, 'uploadReceipt'])->name('upload-receipt');
        });
    });
});
