<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\admin\ProductController;
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

Route::group(['as' => 'admin.'], function () {
    Route::resources([
        'product' => ProductController::class,
        'product-categories' => ProductCategoryController::class,
    ]);
});
