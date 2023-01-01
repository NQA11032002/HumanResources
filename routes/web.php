<?php

use App\Http\Controllers\User\Personally\HomeController;
use App\Http\Controllers\User\Personally\PostController;
use App\Http\Controllers\User\Personally\LoginController;
use App\Http\Controllers\User\Personally\LogoutController;
use App\Http\Controllers\User\Personally\RegisterController;
use App\Http\Controllers\User\Personally\RecoverPassword;
use App\Mail\notifyMail;

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
});

Route::prefix("posts")->name("post.")->group(function () {
    Route::get("/", [PostController::class, "getPosts"])->name("posts");
    Route::get("/createPost", [PostController::class, "createPost"])->name("createPost");
    Route::post("/post-saved", [PostController::class, "postSaved"])->name("post-saved");
    Route::delete("/post-unsaved", [PostController::class, "postUnsaved"])->name("post-unsaved");
    Route::post("/insert-search", [PostController::class, "insertSearch"])->name("insert-search");
});

Route::prefix("login")->name("login.")->group(function () {
    Route::get('/', [LoginController::class, "index"])->name("show");
    Route::get('/check', [LoginController::class, "checkAccount"])->name("login-check");
});

Route::get('/logout', [LogoutController::class, "logout"])->name("logout");

Route::prefix("register")->name("register.")->group(function () {
    Route::get('/', [RegisterController::class, "index"])->name("show");
    Route::post('/post-register', [RegisterController::class, "postRegister"])->name("post-register");
    Route::get('/confirm', [RegisterController::class, "confirmEmail"])->name("confirm");
    Route::get('/sendmail', [RegisterController::class, "sendMail"])->name("sendmail");
    Route::put('/active', [RegisterController::class, "activeAccount"])->name("active");
});

Route::prefix("recover")->name("recover.")->group(function () {
    Route::get('/', [RecoverPassword::class, "index"])->name("show");
});