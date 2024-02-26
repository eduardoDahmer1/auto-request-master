<?php

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\Admin\SiteController as AdminSiteController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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

Route::middleware(['guest'])->group(function () {
    Route::get("login", [UserController::class, "index"])->name("login");
    Route::post("login", [UserController::class, "login"]);
});

Route::middleware(['auth'])->group(function () {
    Route::get("/", [SiteController::class, 'index'])->name("index");

    Route::get("/status/{site}", [SiteController::class, 'status'])->name("status");

    Route::get("logout", [UserController::class, "logout"])->name("logout");

    Route::middleware('can_access_panel')->group(function () {
        Route::get("dashboard", [SiteController::class, "dashboard"])->name("dashboard");

        Route::post('sites/{site}', [SiteController::class, 'disable'])->name('sites.disable');
        Route::resource('sites', SiteController::class)->except(['show', 'index', 'destroy']);

        Route::get('activity', [ActivityLogController::class, 'index'])->name('activity-logs.index');
    });
});
