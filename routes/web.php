<?php

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

//Basic Routing
Route::get('/halo', function () {
    echo 'halo semua';
});

//Controller Routing
Route::get('/controller', [UserController::class, 'try']);
Route::get('/controllerview', [UserController::class, 'view']);

//Depedency Injection
Route::get('/test', [UserController::class, 'testservice']);

//Redirect Routes
Route::permanentRedirect('/sapa', '/halo');

//Route Prefixes
Route::prefix('/halaman')->group(function () {
    Route::get('/pertama', function () {
        //
        $number = 1;

        echo $number;
    });

    Route::get('/kedua', function () {
        //
        $number = 2;

        echo $number;
    });
});