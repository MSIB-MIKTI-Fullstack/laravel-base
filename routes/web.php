<?php


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/products', [CustomerController::class, 'products'])->name('customer.products');

Route::group(['as' => 'customer.'], function () {
    Route::get('/', [CustomerController::class, 'home'])->name('home');
    Route::get('/products', [CustomerController::class, 'products'])->name('products');
});