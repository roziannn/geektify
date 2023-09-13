<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

// Route::get('/login',[LoginController::class, 'login'])->middleware('guest');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
    Route::get('/register', 'register');
    Route::get('/forgot-password', 'forgot');
});

// bentrok routing
Route::controller(UserController::class)->group(function () {
    Route::post('/register', 'store');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});
