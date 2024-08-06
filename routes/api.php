<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::get('user', [AuthController::class, 'user'])->middleware('auth:sanctum');
Route::apiResource('favorites', FavoritesController::class)->middleware('auth:sanctum');

Route::apiResources([
    'categories.products' => CategoryProductController::class,
    'categories' => CategoryController::class,
    'products' => ProductController::class,
]);
