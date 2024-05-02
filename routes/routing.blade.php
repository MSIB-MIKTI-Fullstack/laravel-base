<?php

use App\Http\Controllers\SiswaController;
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
//127.0.0.1:8000/siswa ==>  <h1>SAYA SISWA</h1>
Route::get('/siswa', function () {
    return "<h1>SAYA SISWA</h1>";
});

//127.0.0.1:8000/siswa/id ==>  <h1>SAYA SISWA dengan id</h1>
Route::get('/siswa/{id}', function ($id) {
    return "<h1>SAYA SISWA dengan ID $id</h1>";
})-> where('id', '[0-9]+');

//127.0.0.1:8000/siswa/id/nama ==>  <h1>SAYA SISWA dengan id dan nama</h1>
Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
    return "<h1>SAYA SISWA dengan ID $id dan Nama $nama</h1>";
})-> where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']);
