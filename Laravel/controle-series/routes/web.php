<?php

use App\Http\Controllers\{SeriesController, SeasonsController, EpisodesController, LoginController, UsersController};
use App\Http\Middleware\Authenticator;
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

Route::get('/', function () {
    return to_route('series.index');
})->middleware(Authenticator::class);

Route::resource('/series', SeriesController::class)->except(['show']);

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');

Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');

// Route::controller(SeriesController::class)->group(function () {
//     Route::get('/series', 'index')->name('series.index');
//     Route::get('/series/create', 'create')->name('series.create');
//     Route::post('/series/store', 'store')->name('series.store');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('sign');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/register', [UsersController::class, 'index'])->name('users.index');
Route::post('/register', [UsersController::class, 'store'])->name('users.store');
