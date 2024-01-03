<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowController;
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


Route::get('/', function () {
    return view('welcome');
});
//using routes or alias like this ->name('login')
Route::get('/user', [UserController::class, 'index'])->name('login');


Route::get('/show/{id}', [ShowController::class, 'show']);

// To protect routes use middleware on routes like this ->middleware('auth')
Route::get('/user/{id}', [UserController::class, 'show']);