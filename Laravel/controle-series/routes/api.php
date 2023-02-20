<?php

use App\Http\Controllers\Api\{EpisodesController, SeasonsController, SeriesController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/series', SeriesController::class, ['index', 'store']);
Route::get('/series/{id}/seasons', [SeasonsController::class, 'index']);

Route::controller(EpisodesController::class)->group(function () {
    Route::get('/series/{id}/episodes', 'index');

    Route::patch('/episodes/{id}', 'update');
});
