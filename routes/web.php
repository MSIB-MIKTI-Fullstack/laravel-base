<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::middleware('cache.headers:public;max_age=3600')->group(function () {
    Route::get('/file/{filename}', [HomeController::class, 'readFile']);
});

Route::get('/beranda', [HomeController::class, 'beranda']);