<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\UsersController;

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

Route::get('/contoh', [App\Http\Controllers\ContohController::class, 'contoh']);


Route::resources([
    'users' => App\Http\Controllers\UsersController::class
]);

Route::resource('users', UsersController::class);
Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');