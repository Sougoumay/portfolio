<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [\App\Http\Controllers\HomeController::class,"home"])->name("home");


Route::prefix("/admin/hamid")->name("admin.hamid.")->group(function () {
    Route::get("/user", [UserController::class,"show"])->name("user.show");
    Route::get("/edit", [UserController::class,"edit"])->name("user.edit");
    Route::post("/update", [UserController::class,"update"])->name("user.update");
});
