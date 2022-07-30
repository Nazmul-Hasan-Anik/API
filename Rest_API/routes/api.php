<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyAPIController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\ApiController;
use App\Models\User;
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

//API PHASE-1
Route::get('list-employees',[ApiController::class,"listEmployee"]);
Route::get('single-employee/{id}',[ApiController::class,"singleEmployee"]);
Route::post('add-employee',[ApiController::class,"createEmployee"]);
Route::put('update-employee/{id}',[ApiController::class,"updateEmployee"]);
