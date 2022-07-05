<?php

use Illuminate\Support\Facades\Route;

//Frontent Controllers
use App\Http\Controllers\Frontend\AppHomeController;
use App\Http\Controllers\Frontend\PagesController;


//Auth Controllers
use App\Http\Controllers\HomeController;

//Admin Controllers
use App\Http\Controllers\Backend\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Backend\Admin\DiddikickerController;

//Coach Controllers
use App\Http\Controllers\Backend\Coach\DashboardController as CoachDashboardController;


//Parent Controllers
use App\Http\Controllers\Backend\Parent\DashboardController as ParentDashboardController;



/*
=====================================
Define Routes
*/


//Frontend Routes
Route::get('/', [AppHomeController::class, "index"])->name("app.home");
Route::get('/venues', [PagesController::class, "venues"])->name("page.venues");
Route::get('/venues/{vanueId}', [PagesController::class, "single_venue"])->name("page.single.vanue");
Route::get('/venues/register', [PagesController::class, "register_value"])->name("page.register.vanue");

//Auth Routes
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Admin Protected Routes
Route::group(["prefix"=>"admin", "as"=>"admin.", "middleware"=>["auth", "adminMW"]], function(){
    Route::get("dashboard", [AdminDashboardController::class, "index"])->name("dashboard");
   Route::resource("diddikickers", DiddikickerController::class);

});


//Coach Protected Routes
Route::group(["prefix"=>"coach", "as"=>"coach.", "middleware"=>["auth", "coachMW"]], function(){
    Route::get("dashboard", [CoachDashboardController::class, "index"])->name("dashboard");
});

//Parent Protected Routes
Route::group(["prefix"=>"parent", "as"=>"parent.", "middleware"=>["auth", "parentMW"]], function(){
    Route::get("dashboard", [ParentDashboardController::class, "index"])->name("dashboard");
});
