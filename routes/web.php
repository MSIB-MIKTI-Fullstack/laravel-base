<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

// Route::middleware('cache.headers:public;max_age=3600')->group(function () {
//     Route::get('/file/{filename}', [HomeController::class, 'readFile']);
// });
// Route::get('/products', [HomeController::class, 'products'])->name('customer.products');

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
    Route::get('/products', [CustomerController::class, 'products'])->name('products');
    Route::get('/home', [CustomerController::class, 'home'])->name('home');
});
