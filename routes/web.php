<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return redirect()->to('products');
});
route::get('/coba', function () {
    echo "Belajar routing dengan Laravel";
});

route::prefix('/halaman')->group(function () {
    route::get('/home', [HomeController::class, 'index'])->name('halaman.home');
    route::get('/dashboard', [HomeController::class, 'dashboard'])->name('halaman.dashboard');
});


Route::resource('products', ProductsController::class);
