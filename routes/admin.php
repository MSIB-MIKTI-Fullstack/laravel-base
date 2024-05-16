<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductCategoryController;

Route::group(['as' => 'admin.'], function () {
   Route::resources([
       'product' => ProductController::class,
       'product-categories' => ProductCategoryController::class,
   ]);
});
