<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Partner used route
// Need to hit the api in url and partner id to increment the api request
Route::get("userdata/{id}", [ApiController::class, 'index']);

Route::get('/', function () {
    if(Auth::check())
    {
        return redirect("admin/dashboard");
    }
    return view('welcome');
})->name("/");

Route::post("/", [LoginController::class, 'login']);
Route::post("/logout", [LoginController::class, 'logout']);

Route::group(["prefix" => "admin", "middleware" => "auth"], function(){
    Route::get("/dashboard", [DashboardController::class, 'index']);
    Route::post("/dashboard", [DashboardController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');