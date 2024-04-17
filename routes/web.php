<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

route::get('/products', [HomeController::class, 'products'])->name('customer.products');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
