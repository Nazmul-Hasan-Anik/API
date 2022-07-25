<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyAPIController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\API\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("data",[DummyAPIController::class,'getData']);
Route::get("device/{id?}",[DeviceController::class,'list']);
Route::get("country",[CountryController::class,'all']);
Route::get("country/{id}",[CountryController::class,'countrybyid']);
Route::post("country",[CountryController::class,'savecountry']);
//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    Route::resource('programs', App\Http\Controllers\API\ProgramController::class);

    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);});
