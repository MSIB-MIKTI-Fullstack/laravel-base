<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;

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
    Route::get('/', [CustomerController::class, 'home'])->name('home');
    Route::get('/products', [CustomerController::class, 'products'])->name('products');
});
