<?php

use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPage\HomeController;
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

// Route::get('about', function () {
//     return "Hello, I'm Moch Ihsan Saepulloh";
// });

// Route::prefix('home')->group(function () {
//     Route::get('/', [HomeController::class, 'index'])->name('home.index');
//     Route::get('/{id}', [HomeController::class, 'show'])->name('home.show');
//     Route::put('/{id}', [HomeController::class, 'update'])->name('home.update');
//     Route::delete('/{id}', [HomeController::class, 'destroy'])->name('home.destroy');
//     Route::post('/', [HomeController::class, 'store'])->name('home.store');
// });

// // Route::prefix('/')->group(function () {
// //     Route::get('register', [AuthController::class, 'register'])->name('register');
// //     Route::get('login', [AuthController::class, 'login'])->middleware('guest')->name('login');
// //     Route::get('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
// //     Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
// // });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('user', UserController::class)->names('admin.user');
    Route::resource('mahasiswa', MahasiswaController::class)->names('admin.mahasiswa');
});

Route::get('/products', [HomeController::class, 'products'])->name('customer.products');
