<?php

use App\Http\Controllers\Api\V1\PersonController;
use App\Http\Controllers\Api\V1\PersonLoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix("v1")->group(function(){

   Route::apiResource("person", PersonController::class);

   Route::post("login", [PersonLoginController::class, "login"])->name("user_login");
   
});

Route::fallback([PersonLoginController::class, "fallback"]);



