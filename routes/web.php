<?php

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/coba', function () {
    echo "belajar routing dengan laravel";
});

route::prefix('/halaman')->group(function () {
    route::get('/home', [HomeController::class, 'index'])->name('halaman.home');
    route::get('/dashboard', [HomeController::class, 'dashboard'])->name('halaman.dashboard');
});

route::resources([
    'user' => UserController::class,
]);
