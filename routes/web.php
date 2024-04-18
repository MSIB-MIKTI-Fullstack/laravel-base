<?php

use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LandingPage\CustomerController;
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

// Route::get('about', function () {
//     return "Hello, I'm Moch Ihsan Saepulloh";
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
    Route::resource('mahasiswa', MahasiswaController::class)->names('admin.mahasiswa');
    Route::resource('user', UserController::class)->names('admin.user');
});

Route::group(['as' => 'customer.'], function () {
    Route::get('/', [CustomerController::class, 'home'])->name('home');
    Route::get('/products', [CustomerController::class, 'products'])->name('products');
});
