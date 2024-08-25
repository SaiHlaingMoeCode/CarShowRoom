<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('categories', [MainController::class, 'getCategory']);
Route::get('products', [MainController::class, 'getProduct']);
Route::get('photos', [MainController::class, 'getPhoto']);
