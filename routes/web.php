<?php

use App\Http\Controllers\TestRequestController;
use App\Http\Controllers\UsersController;
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

Route::get('/token', function () {
    return view('users.token');
})->middleware('verify.token');

Route::resources([
    'users' => UsersController::class
]);

Route::view('/component', 'learn-component.index');