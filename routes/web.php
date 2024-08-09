<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;

//guest routes
 Route::get('/',[GuestController::class,'guestHomePage'])->name('guest#homePage');

//authentication routes
Route::get('login-page',[AuthController::class,'loginPage'])->name('auth#loginPage');
Route::get('register-page',[AuthController::class, 'registerPage'])->name('auth#registerPage');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');
});
