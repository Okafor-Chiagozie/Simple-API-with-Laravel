<?php

use Illuminate\Support\Facades\Route;

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

// Route::get("/first", function(){
//    return "<h1>Hello World</h1>";
// })->prefix("user")->middleware("auth");

// Route::get("/login", function(){
//    return "<h1>Login Biko</h1>";
// })->prefix("user")->name("login");
