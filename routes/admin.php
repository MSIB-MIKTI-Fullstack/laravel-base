<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

Route::group(['as' => 'admin.'], function () {
   Route::resources([
       'product' => ProductController::class,
   ]);
});
