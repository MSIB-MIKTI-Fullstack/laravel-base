<?php

use App\Http\Controllers\CobaController;
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

Route::get('/coba', function (){
    $angka = 15;
    echo $angka;
});

Route::get('/controller', [CobaController::class, 'coba']);
Route::get('/cobaview', [CobaController::class, 'view']);

Route::prefix('/user')->group(function () {
    Route::get('/contoh', function (){
        $angka = 100;
        echo $angka;
    });

    Route::get('/teks', function (){
        $teks = "Ini Teks";
        echo $teks;
    });
});

Route::get('/view', function () {
    return view('coba');
});

Route::get('/admin', function () {
    return view('user.admin');
});

Route::resources([
    'users' => UsersController::class,
]);




