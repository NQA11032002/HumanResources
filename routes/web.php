<?php

use App\Http\Controllers\User\Personally\HomeController;
use App\Http\Controllers\User\Personally\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [HomeController::class, "getHome"])->name("home-post-hot");

Route::prefix("")->name("home.")->group(function () {
    Route::get("/post-vip", [HomeController::class, "getPostVipEmployer"])->name("home-post-vip");
    Route::get("/post-new", [HomeController::class, "getPostNewEmployer"])->name("home-post-new");
    Route::post("/post-saved", [HomeController::class, "postSaved"])->name("post-saved");
    Route::delete("/post-unsaved", [HomeController::class, "postUnsaved"])->name("post-unsaved");
});

Route::prefix("posts")->name("post.")->group(function () {
    Route::get("/", [PostController::class, "getPosts"])->name("posts");
});