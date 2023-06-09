<?php

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

// API route for regist user account
Route::post("/regist", [App\Http\Controllers\Api\AuthController::class, "register"]);
//API route for login user
Route::post("/login", [App\Http\Controllers\Api\AuthController::class, "login"]);

Route::get("/psycologists", [\App\Http\Controllers\Api\PsycologistController::class, "getPsycologists"]);
Route::get("/psycologists/{id}", [\App\Http\Controllers\Api\PsycologistController::class, "getDetailPsycologist"]);
Route::get("/schedules/{id}", [\App\Http\Controllers\Api\ScheduleController::class, "getPsycologistSchedule"]);
Route::get("/consults/{id}", [\App\Http\Controllers\Api\ConsultController::class, "getUserScheduleConsult"]);

Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
    return $request->user();

    // API route for logout user
    Route::post("/logout", [App\Http\Controllers\API\AuthController::class, "logout"]);
});
