<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;

//guest routes
Route::get('/', [GuestController::class, 'guestHomePage'])->name('guest#homePage');

// Authentication routes
Route::get('login-page', [AuthController::class, 'loginPage'])->name('auth#loginPage');
Route::get('register-page', [AuthController::class, 'registerPage'])->name('auth#registerPage');

// Authenticated routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

});

    // // User routes
    // Route::group(['prefix' => 'user'], function () {
    //     Route::get('/homePage', [UserController::class, 'home'])->name('user#home');
    // });

    // // Admin routes
    // Route::group(['prefix' => 'admin'], function () {
    //     Route::get('/main', [AdminController::class, 'main'])->name('admin#dashboard');
    // });



