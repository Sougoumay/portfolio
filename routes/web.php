<?php

use App\Http\Controllers\FormationController;
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


Route::prefix("/admin")->name("admin.")->group(function () {
    Route::prefix("/profile")->name("profile.")->controller(UserController::class)->group(function () {
        Route::get("/show", "show")->name("show");
        Route::get("/edit", "edit")->name("edit");
        Route::post("/update", "update")->name("update");
    });

    Route::resource("formation", FormationController::class)->only("index","create","store");
});
