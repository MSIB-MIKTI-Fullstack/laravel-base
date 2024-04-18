<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SessionControll;
use App\Http\Controllers\SiswaController;
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

// Route::get('', function () {
//     return view('welcome');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// //127.0.0.1:8000/siswa ==>  <h1>SAYA SISWA</h1>
// Route::get('/siswa', function () {
//     return "<h1>SAYA SISWA</h1>";
// });

// //127.0.0.1:8000/siswa/id ==>  <h1>SAYA SISWA dengan id</h1>
// Route::get('/siswa/{id}', function ($id) {
//     return "<h1>SAYA SISWA dengan ID $id</h1>";
// })-> where('id', '[0-9]+');

// //127.0.0.1:8000/siswa/id/nama ==>  <h1>SAYA SISWA dengan id dan nama</h1>
// Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
//     return "<h1>SAYA SISWA dengan ID $id dan Nama $nama</h1>";
// })-> where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']);

Route::get('siswa',[SiswaController::class,'index']);

Route::get('siswa/{id}',[SiswaController::class,'detail']);

Route::get('/sesi',[SessionControll::class,'index']);
Route::post('/sesi/login',[SessionControll::class,'login']);


Route::group(['as' => 'customer.'], function () {
Route::get('/products', [CustomerController::class, 'products'])->name('products');
Route::get('/', [CustomerController::class, 'home'])->name('home');
});