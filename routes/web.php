<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;

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
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/product/{slug}', [ProductController::class, 'detail'])->name('product-detail');
});

