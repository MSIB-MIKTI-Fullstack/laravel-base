<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

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

Route::get('/coba', function () {
    return view('welcome'); 
});

Route::get('/contoh', function(){
    $c = 12;
    echo $c;
});

Route::get('/user', [Homecontroller::class, 'index']);

Route::get('/',[Homecontroller::class, 'index'])->name('app.index'); 


//php artisan route:cache



