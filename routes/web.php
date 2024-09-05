<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;

//guest routes
Route::get('/', [GuestController::class, 'guestHomePage'])->name('guest#homePage');

// Authentication routes
Route::get('login-page', [AuthController::class, 'loginPage'])->name('auth#loginPage');
Route::get('register-page', [AuthController::class, 'registerPage'])->name('auth#registerPage');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // routes for user
    Route::middleware(['user'])->group(function () {

        Route::group(['prefix' => 'user'], function () {

            Route::get('/homePage', [UserController::class, 'home'])->name('user#home');

            //user profile
            Route::group(['prefix' => 'profile'], function () {
                Route::get('/profilePage', [UserController::class, 'userProfile'])->name('user#profile');
                Route::get('/editProfilePage', [UserController::class, 'editProfilePage'])->name('user#editProfilePage');
                Route::post('/updateProfile', [UserController::class, 'updateProfile'])->name('user#updateProfile');
            });
        });
        Route::get('/profilePage', [UserController::class, 'userProfile'])->name('user#profile');
        Route::get('/editProfilePage', [UserController::class, 'editProfilePage'])->name('user#editProfilePage');
        Route::post('/updateProfile', [UserController::class, 'updateProfile'])->name('user#updateProfile');
    });

    //user profile
    //   Route::prefix('profile')->group(function(){
    //     Route::get('/profilePage',[UserController::class,'userProfile'])->name('user#profile');
    //     Route::get('/editProfilePage',[UserController::class,'editProfilePage'])->name('user#editProfilePage');
    //     Route::post('/updateProfile',[UserController::class,'updateProfile'])->name('user#updateProfile');
    //     });


});

//   routes for admin
Route::middleware(['admin'])->group(function () {

    Route::group(['prefix' => 'admin'], function () {

        Route::get('/adminPage', [AdminController::class, 'adminPage'])->name('admin#dashboard');
    });

    //category routes
    Route::group(['prefix' => 'category'], function () {
        Route::get('/brandCategories', [CategoryController::class, 'brandCategory'])->name('admin#brandCategory');
        Route::get('/createBrandPage', [CategoryController::class, 'createBrandPage'])->name('admin#createBrandPage');
        Route::post('/createBrand', [CategoryController::class, 'createBrand'])->name('admin#createBrand');
        Route::get('/editBrandPage/{id}', [CategoryController::class, 'editBrandPage'])->name('admin#editBrandPage');
        Route::post('updateBrand', [CategoryController::class, 'updateBrand'])->name('admin#updateBrand');
        Route::get('deleteBrand/{id}', [CategoryController::class, 'deleteBrand'])->name('admin#deleteBrand');
    });

    //Product routes
    Route::group(['prefix' => 'product'], function () {
        Route::get('/createProductPage', [ProductController::class, 'createProductPage'])->name('admin#createProductPage');
        Route::post('/createProduct', [ProductController::class, 'createProduct'])->name('admin#createProduct');
        Route::get('/carProduct', [ProductController::class, 'carProduct'])->name('admin#carProduct');
        Route::get('/detailProduct/{id}', [ProductController::class, 'detailProduct'])->name('admin#detailProduct');
        Route::get('/editProduct/{id}', [ProductController::class, 'editProduct'])->name('admin#editProduct');
        Route::post('/updateProduct', [ProductController::class, 'updateProduct'])->name('admin#updateProduct');
        Route::get('/deteteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('admin#deleteProduct');
    });

    //admin profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/profilePage', [AdminController::class, 'profile'])->name('admin#profile');
        Route::get('/editProfilePage', [AdminController::class, 'editProfilePage'])->name('admin#editProfilePage');
        Route::post('/updateProfile', [AdminController::class, 'updateProfile'])->name('admin#updateProfile');
    });

    //admin password
    Route::group(['prefix' => 'password'], function () {
        Route::get('/adminPassword', [AdminController::class, 'adminPasswordPage'])->name('admin#passwordPage');
        Route::post('/adminPasswordChange', [AdminController::class, 'adminPasswordChange'])->name('admin#passwordChange');
    });

    //car gallary
    Route::group(['prefix' => 'gallery'], function () {
        Route::get('/uploadImage', [GalleryController::class, 'uploadImage'])->name('admin#uploadImage');
        Route::post('/createImage', [GalleryController::class, 'createImage'])->name('admin#createImage');
        Route::get('imageList', [GalleryController::class, 'imageList'])->name('admin#imageList');
        Route::get('deleteImage/{id}', [GalleryController::class, 'deleteImage'])->name('admin#deleteImage');
        Route::get('editImage/{id}', [GalleryController::class, 'editImage'])->name('admin#editImage');
        Route::post('updateImage/{id}', [GalleryController::class, 'updateImage'])->name('admin#updateImage');
    });

    //user&admin list
    Route::group(['prefix' => 'customer'], function () {
        Route::get('/adminList', [CustomerController::class, 'adminList'])->name('admin#adminList');
        Route::get('/userList', [CustomerController::class, 'userList'])->name('admin#userList');
        Route::get('/deleteUser/{id}', [CustomerController::class, 'deleteUser'])->name('admin#deleteUser');
        Route::get('/changeRolePage/{id}', [CustomerController::class, 'changeRolePage'])->name('admin#changeRolePage');
        Route::post('/changeRole/{id}', [CustomerController::class, 'changeRole'])->name('admin#changeRole');
    });
});
