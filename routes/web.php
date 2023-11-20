<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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

Route::get("/blogs", [BlogsController::class, "index"]);
Route::get("/blog/{slug}", [BlogsController::class, "blog"]);

Route::get("/dashboard/blogs", [DashboardBlogsController::class, "blogs"])->middleware(["auth", "isAdmin"])->name("dashboard");

Route::get("/login", [AuthController::class, "login"])->middleware("guest")->name("login");
Route::get("/register", [AuthController::class, "register"])->middleware(["auth", "isAdmin"]);

Route::post("/login", [AuthController::class, "post_login"])->middleware("guest");