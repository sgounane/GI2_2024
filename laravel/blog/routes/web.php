<?php

use \App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Requests\ArticleRequest;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\ArticleController;

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

Route::get('/',[ArticleController::class, "index"])->name("home");

Route::prefix("/articles")->controller(ArticleController::class)->group(function(){
    Route::get("/new", "articleForm")->name("articleForm")->middleware("auth");

    Route::get("/edit/{slug}", "editArticle")->name("editArticle")->middleware("auth");

    Route::post("/","createArticle")->name("createArticle")->middleware("auth");

    Route::get('/{slug}', "showArticle")->name("article");
});

Route::get("/user",[UserController::class,"userForm"])->name("createUser");
Route::post("/user",[UserController::class,"createUser"]);

Route::get("/user/login",[UserController::class,"loginForm"])->name("login");

Route::post("/user/login",[UserController::class,"login"]);
Route::get("/user/logout",[UserController::class,"logout"])->name("logout");