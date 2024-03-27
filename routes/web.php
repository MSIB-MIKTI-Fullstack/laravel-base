<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserResourceController;

Route::get('/', function () {
    return view('welcome');
});

//contoh membuat route
Route::get('/test', [App\Http\Controllers\TestController::class, 'test']);

Route::resources([
    'users' => UserResourceController::class
]);