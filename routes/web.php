<?php

use Illuminate\Support\Facades\Route;

//Frontent Controllers
use App\Http\Controllers\Frontend\AppHomeController;

//Auth Controllers
use App\Http\Controllers\HomeController;

//Admin Controllers
use App\Http\Controllers\Backend\Admin\DashboardController as AdminDashboardController;

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

//Auth Routes
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Admin Protected Routes
Route::group(["prefix"=>"admin", "as"=>"admin.", "middleware"=>["auth", "adminMW"]], function(){
    Route::get("dashboard", [AdminDashboardController::class, "index"])->name("dashboard");
});


//Coach Protected Routes
Route::group(["prefix"=>"coach", "as"=>"coach.", "middleware"=>["auth", "coachMW"]], function(){
    Route::get("dashboard", [CoachDashboardController::class, "index"])->name("dashboard");
});

//Parent Protected Routes
Route::group(["prefix"=>"parent", "as"=>"parent.", "middleware"=>["auth", "parentMW"]], function(){
    Route::get("dashboard", [ParentDashboardController::class, "index"])->name("dashboard");
});
