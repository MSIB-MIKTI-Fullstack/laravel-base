<?php

use App\Http\Controllers\HomeController;
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
Route::get('/percobaan', function(){
    echo "Percobaan";
});
Route::get('/coba', [HomeController::class, 'coba']);
Route::get('/home', [HomeController::class, 'index']);

Route::post('home/create', [HomeController::class, 'coba']);
Route::put('home/create', [HomeController::class, 'coba']);
Route::delete('home/create', [HomeController::class, 'coba']);

Route::prefix('kasir')->group(function(){
    Route::post('home/create', [HomeController::class, 'coba']);
    Route::put('home/create', [HomeController::class, 'coba']);
    Route::delete('home/create', [HomeController::class, 'coba']);
});
