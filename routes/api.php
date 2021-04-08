<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivishionController;
use App\Http\Controllers\RomadanController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/romadans', [RomadanController::class, 'index']);
Route::get('/romadans/{date}', [RomadanController::class, 'dateWiseIndex']);
Route::get('/divishions', [DivishionController::class, 'index']);
Route::get('/districts/divishion/{div_id}', [DistrictController::class, 'index']);
Route::get('/districts/{district_id}', [DistrictController::class, 'getDistrict']);
Route::get('/romadan/{romadan_id}/district/{district_id}', [RomadanController::class, 'getScheduleForDistricts']);
