<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentCardTypeController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusOrderController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserPaymentCardsController;
use App\Http\Controllers\UserSettingController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('change-password', [AuthController::class, 'changePassword'])->middleware('auth:sanctum');
Route::get('user', [AuthController::class, 'user'])->middleware('auth:sanctum');

Route::get('products/{product}/related', [ProductController::class, 'related'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'categories.products' => CategoryProductController::class,
        'delivery_methods' => DeliveryMethodController::class,
        'statuses' => StatusController::class,
        'statuses.orders' => StatusOrderController::class,
        'user-addresses' => UserAddressController::class,
        'reviews' => ReviewController::class,
        'products.reviews' => ProductReviewController::class,
        'payment_types' => PaymentTypeController::class,
        'categories' => CategoryController::class,
        'favorites' => FavoritesController::class,
        'products' => ProductController::class,
        'settings' => SettingController::class,
        'orders' => OrderController::class,
        'user-settings' => UserSettingController::class,
        'payment-card-types' => PaymentCardTypeController::class,
        'user-payment-cards' => UserPaymentCardsController::class,
    ]);
});
