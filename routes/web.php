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
Route::get('user-registration',[UserController::class, 'index']);

Route::post('user-store', [UserController::class,'userPostRegistration']);

Route::get('user-login', [UserController::class,'userLoginIndex']);

Route::post('login', [UserController::class,'userPostLogin']);

Route::get('dashboard', [UserController::class,'dashboard']);

Route::get('logout', [UserController::class,'logout']);
