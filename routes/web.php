<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardBlogsController;

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

Route::get("/contact-us", [ContactController::class, "index"]);
Route::get("/about", [AboutController::class, "index"]);

Route::controller(AuthController::class)->group(function() {
    Route::middleware("guest")->group(function() {
        Route::get("/login", "login")->name("login");
        Route::post("/login", "post_login");
    });

    Route::middleware(["auth", "isAdmin"])->group(function() {
        Route::get("/register", "register");
        Route::post("/logout", "logout");
    });
});

Route::middleware(["auth", "isAdmin"])->group(function() {
    Route::prefix("dashboard")->group(function() {
        
        Route::controller(DashboardBlogsController::class)->group(function() {
            Route::get("/", "index");
            Route::prefix("/blogs")->group(function() {
                Route::get("/", "index");
                Route::get("/archived", "index");
                Route::get("/create", "create");
                Route::get("/{blogs:slug}", "show");
                Route::get("/{blogs:slug}/edit", "edit");
                Route::post("/{blogs:slug}/update", "update");
                Route::post("/", "store");
                Route::post("/{blogs:id}/destroy", "destroy");
            });
        });

        Route::resource("/manage-contacts", DashboardContactController::class)->except("show");
    });
});