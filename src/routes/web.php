<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index']);
Route::post('/register', [ContactController::class, 'newUser']);
Route::post('/mypage/profile', [ContactController::class, 'newProfile']);
Route::post('/login', [ContactController::class, 'loginUser']);



//Route::middleware('auth')->group(function () {
//        Route::get('/', [ContactController::class, 'index']);
//    });
