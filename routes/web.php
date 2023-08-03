<?php

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
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

Route::get('/', [Controller::class, 'homepage']);

// guest middleware: if logged in, redirect to route define as `HOME` at `RouteServiceProvider`
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');
Route::get('/signup', [UserController::class, 'showSignupForm'])->middleware('guest');
Route::post('/signup', [UserController::class, 'signup'])->middleware('guest');
//
// authmiddleware: if not logged in, redirect to route named `login`
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
