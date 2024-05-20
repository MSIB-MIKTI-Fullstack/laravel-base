<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
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
        'users' => UserController::class,
    ]);

    Route::group(['prefix' => '/transactions', 'as' => 'transactions.'], function () {
        Route::get('/', [TransactionController::class, 'index'])->name('index');
        Route::post('/process-transaction', [TransactionController::class, 'processTransaction'])->name('process-transaction');
    });
});
