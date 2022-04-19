<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporterController;

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

Route::controller(ReporterController::class)->group(function () {
    Route::get('total-today', 'totalToday');
    Route::get('active-players', 'activePlayers');
    Route::get('weekly-figures', 'weeklyFigures');
    Route::get('delete-wagers', 'deleteWagers');
    Route::get('manual-plays', 'manualPlays');
    // Route::post('/orders', 'store');
});
