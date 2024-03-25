<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\AksesBuatBukaDompet;
use App\Http\Middleware\VerificationMiddleware;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('/user')->group(function () {
//     Route::get('/contoh', function () {
//         //
//         $angka = 12;

//         echo $angka;
//     });

//     Route::get('/teks', function () {
//         //
//         $angka = 12;

//         echo $angka;
//     });
// });


// Route::get('/login', [AuthController::class, 'login']);
// Route::post('/login/process', [AuthController::class, 'process']);
// Route::put('/login/process', [AuthController::class, 'process']);
// Route::patch('/login/process', [AuthController::class, 'process']);
// Route::delete('/login/process', [AuthController::class, 'process']);
// Route::options('/login/process', [AuthController::class, 'process']);


// Route::middleware(['verif', 'verif_token'])->group(function () {
//     Route::get('/beranda', [HomeController::class, 'beranda']);

//     Route::get('/controller', [HomeController::class, 'coba']);
// });

// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login/process', [LoginController::class, 'login'])->name('login');

// Route::redirect('/controller', '/beranda', 301);
// Route::permanentRedirect('/controller', '/beranda');

// Route::view('/beranda', 'beranda');

Route::resources([
    'users' => UsersController::class
]);

Route::middleware([AksesBuatBukaDompet::class])->group(function () {
    Route::get('/dompet', function () {
        return response()->json(['message' => 'Uang 10.000'], 200)
            ->withHeaders([
                'Content-Type' => 'application/json',
                'kunci-kamar' => 'required',
                'kunci-lemari' => 'Automatic Generate',
            ]);
    });
});


Route::middleware('cache.headers:public;max_age=3600')->group(function () {
    Route::get('/file/{filename}', [HomeController::class, 'readFile']);
});

Route::get('/beranda', [HomeController::class, 'beranda']);
