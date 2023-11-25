<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAboutUsController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardBlogsController;
use App\Http\Controllers\IndexController;

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

Route::controller(IndexController::class)->group(function() {
    Route::get("/", "welcome");
    Route::get("/contact-us", "contact_us");
    Route::get("/about", "about");
    Route::get("/product-and-features", "product_and_features");
    Route::get("/services", "services");
    Route::get("/blogs", "blogs");
    Route::get("/blog/{slug}", "blog");
});

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

        Route::controller(DashboardAboutUsController::class)->group(function() {
            Route::prefix("about-us")->group(function() {
                Route::get("/", "index");
                Route::post("/{about_us:subsection}/update", "update");
            });
        });
    });
});