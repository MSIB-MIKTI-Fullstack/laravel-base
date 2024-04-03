<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;

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

Route::get('/create', function () {
    return view('users.layout.create'); 
});

Route::get('/admin', function(){
    return view('users.layout.index');
});

Route::get('/contoh', function(){
    $c = 12;
    echo $c; 
    
});

Route::get('/',[Homecontroller::class, 'index']);  //vue admin

Route::get('/user/{$id}', [UserController::class, 'show']); // ('/URI namanya')


Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create'); 
Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit'); //{todo} parameters func yg ada di controller edit dan update
Route::put('/todo/{todo}/update', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todo/{todo}/destroy', [TodoController::class, 'destroy'])->name('todo.destroy');

// Route::resources([
//     'todo' => TodoController::class,
// ]);

//php artisan route:cache



