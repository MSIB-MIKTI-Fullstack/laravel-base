<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Halo admin';
// });

Route::group(['as' => 'admin.'], function () {
    Route::resources([
        'product' => ProductController::class,
        'product-categories' => ProductCategoryController::class,
        'users' => UserController::class,
    ]);
});
