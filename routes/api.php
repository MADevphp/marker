<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusOrderController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserPaymentCardsController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'categories.products' => CategoryProductController::class,
        'user-payment-cards' => UserPaymentCardsController::class,
        'delivery_methods' => DeliveryMethodController::class,
        'statuses' => StatusController::class,
        'statuses.orders' => StatusOrderController::class,
        'user-addresses' => UserAddressController::class,
        'reviews' => ProductReviewController::class,
        'products.reviews' => ProductReviewController::class,
        'payment_types' => PaymentTypeController::class,
        'categories' => CategoryController::class,
        'favorites' => FavoritesController::class,
        'products' => ProductController::class,
        'orders' => OrderController::class,
        'user' => AuthController::class,
    ]);
});
