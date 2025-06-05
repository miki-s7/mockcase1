<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/register', [UserController::class, 'newUser']);
Route::get('/mypage/profile', [UserController::class, 'profile']);
Route::post('/mypage/profile', [UserController::class, 'newProfile']);
Route::get('/', [UserController::class, 'index']);

Route::post('/login', [UserController::class, 'loginUser']);



//Route::middleware('auth')->group(function () {
//        Route::get('/', [UserController::class, 'index']);
//    });
