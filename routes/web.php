<?php

use App\Http\Controllers\AuthController;
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

Route::prefix('/user')->group(function () {
    Route::get('/contoh', function () {
        //
        $angka = 12;

        echo $angka;
    });

    Route::get('/teks', function () {
        //
        $angka = 12;

        echo $angka;
    });
});


Route::get('/login', [AuthController::class, 'login']);
Route::post('/login/process', [AuthController::class, 'process']);
Route::put('/login/process', [AuthController::class, 'process']);
Route::patch('/login/process', [AuthController::class, 'process']);
Route::delete('/login/process', [AuthController::class, 'process']);
Route::options('/login/process', [AuthController::class, 'process']);

Route::get('/controller', [HomeController::class, 'coba']);
Route::get('/beranda', [HomeController::class, 'testing']);


// Route::redirect('/controller', '/beranda', 301);
Route::permanentRedirect('/controller', '/beranda');

// Route::view('/beranda', 'beranda');
