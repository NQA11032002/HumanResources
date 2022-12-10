<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Personally\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix("personally")->name("personally.")->group(function () {
    Route::get("/", [HomeController::class, "getHome"])->name("home-post-hot");
    Route::get("/post-vip", [HomeController::class, "getPostVipEmployer"])->name("home-post-vip");
});