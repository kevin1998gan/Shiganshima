<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;


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


Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);

Route::get('/login/user', [LoginController::class, 'showUserLoginForm']);

Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);

Route::get('/register/user', [RegisterController::class, 'showUserRegisterForm']);

Route::post('/login/admin', [LoginController::class, 'adminLogin']);

Route::post('/login/user', [LoginController::class, 'userLogin']);

Route::post('/register/admin', [RegisterController::class, 'createAdmin']);

Route::post('/register/user', [RegisterController::class, 'createUser']);

Route::group(['middleware' => 'auth:user'], function () {
    Route::view('/user', 'user');
});
Route::group(['middleware' => 'auth:admin'], function () {

    Route::get('/admin', [AdminController::class, 'getName']);
    Route::view('/action', 'action');
    Route::view('/update', 'update');
    
});

Route::group(['middleware' => 'auth:user'], function () {

    Route::view('/user', 'user');
});

Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/logoutUser', [LoginController::class, 'logoutUser']);
