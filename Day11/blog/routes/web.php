<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\registerController;
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

Route::get("/", [homeController::class, "index"]);

Route::get("/register", [registerController::class, "regist"]);

Route::post("/dashboard", [registerController::class, "dashboard"]);
