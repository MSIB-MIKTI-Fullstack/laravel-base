<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return "Hello, I'm Moch Ihsan Saepulloh";
});

Route::prefix('home')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/{id}', [HomeController::class, 'show'])->name('home.show');
    Route::put('/{id}', [HomeController::class, 'update'])->name('home.update');
    Route::delete('/{id}', [HomeController::class, 'destroy'])->name('home.destroy');
    Route::post('/', [HomeController::class, 'store'])->name('home.store');
});
