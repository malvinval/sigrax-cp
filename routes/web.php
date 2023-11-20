<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardBlogsController;
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


Route::get("/login", [AuthController::class, "login"])->middleware("guest")->name("login");
Route::get("/register", [AuthController::class, "register"])->middleware(["auth", "isAdmin"]);

Route::post("/login", [AuthController::class, "post_login"])->middleware("guest");

Route::prefix("dashboard/blogs")->group(function() {
    Route::get("/", [DashboardBlogsController::class, "index"])->middleware(["auth", "isAdmin"]);
    Route::get("/create", [DashboardBlogsController::class, "create"])->middleware(["auth", "isAdmin"]);
    Route::get("/{blogs:slug}", [DashboardBlogsController::class, "show"])->middleware(["auth", "isAdmin"]);
    Route::get("/{blogs:slug}/edit", [DashboardBlogsController::class, "edit"])->middleware(["auth", "isAdmin"]);
    Route::post("/{blogs:slug}/update", [DashboardBlogsController::class, "update"])->middleware(["auth", "isAdmin"]);
    Route::post("/", [DashboardBlogsController::class, "store"])->middleware(["auth", "isAdmin"]);
});