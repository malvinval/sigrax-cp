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

Route::middleware(["auth", "isAdmin"])->group(function() {
    Route::prefix("dashboard")->group(function() {
        
        Route::prefix("/blogs")->group(function() {
            Route::controller(DashboardBlogsController::class)->group(function() {
                Route::get("/", "index");
                Route::get("/create", "create");
                Route::get("/{blogs:slug}", "show");
                Route::get("/{blogs:slug}/edit", "edit");
                Route::post("/{blogs:slug}/update", "update");
                Route::post("/", "store");
                Route::post("/{blogs:id}/destroy", "destroy");
            });
        });
        
    });
});