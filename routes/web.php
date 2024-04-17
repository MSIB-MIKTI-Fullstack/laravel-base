<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [HomeController::class, 'products'])->name('customer.products');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/aldi', function () {
//     return "<h1>SAYA ALDI</h1>";
// });


// Route::get('/dashboard', function () {
//     return view('dashboard', ['name' => 'Renaldi'], ['tglLahir' => date('d-m-Y')]);
// });

// Route::get('/aldi', function () {
//     return redirect('dashboard');
// });

// Route::resource('users', UserController::class);
