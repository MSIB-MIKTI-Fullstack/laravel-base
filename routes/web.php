<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\TodoController;
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
Route::group(['as' => 'customer.'], function(){
    Route::get('/products',[Homecontroller::class, 'products'])->name('products');  //index adalah method yg ada di controller Homecontroller
    Route::get('/', [Homecontroller::class, 'home'])->name('home'); //home adalah method yg ada di controller Homecontroller
});

