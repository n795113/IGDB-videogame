<?php

//use App\Http\Controllers\GamesController as GamesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\GamesController::class, 'index']);
Route::get('/games', [App\Http\Controllers\GamesController::class, 'index']);
Route::get('/show/{slug}', [App\Http\Controllers\GamesController::class, 'show'])->name('games.show');