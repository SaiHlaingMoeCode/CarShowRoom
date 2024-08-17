<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

//guest routes
Route::get('/', [GuestController::class, 'guestHomePage'])->name('guest#homePage');

// Authentication routes
Route::get('login-page', [AuthController::class, 'loginPage'])->name('auth#loginPage');
Route::get('register-page', [AuthController::class, 'registerPage'])->name('auth#registerPage');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // routes for user
    Route::middleware(['user'])->group(function () {

        Route::group(['prefix' => 'user'], function () {

            Route::get('/homePage', [UserController::class, 'home'])->name('user#home');

        });
    });

    //   routes for admin
    Route::middleware(['admin'])->group(function () {

        Route::group(['prefix' => 'admin'], function () {

            Route::get('/adminPage', [AdminController::class, 'adminPage'])->name('admin#dashboard');

        });

        //category routes
        Route::group(['prefix'=>'category'],function(){
            Route::get('/brandCategories',[CategoryController::class,'brandCategory'])->name('admin#brandCategory');
            Route::get('/createBrandPage',[CategoryController::class,'createBrandPage'])->name('admin#createBrandPage');
            Route::post('/createBrand',[CategoryController::class,'createBrand'])->name('admin#createBrand');
            Route::get('/editBrandPage/{id}',[CategoryController::class,'editBrandPage'])->name('admin#editBrandPage');
            Route::post('updateBrand',[CategoryController::class,'updateBrand'])->name('admin#updateBrand');
            Route::get('deleteBrand/{id}',[CategoryController::class,'deleteBrand'])->name('admin#deleteBrand');
        });

        //Product routes
        Route::group(['prefix'=>'product'],function(){
            Route::get('/createProductPage',[ProductController::class,'createProductPage'])->name('admin#createProductPage');
            Route::post('/createProduct',[ProductController::class,'createProduct'])->name('admin#createProduct');
            Route::get('/carProduct',[ProductController::class,'carProduct'])->name('admin#carProduct');
        });
    });
});
