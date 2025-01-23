<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\MidtransController;
use App\Http\Controllers\API\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function() {
    // User route
    Route::get('user', [UserController::class, 'fetch']);
    Route::post('user', [UserController::class, 'updateProfile']);
    Route::post('user/photo', [UserController::class, 'updatePhoto']);
    Route::post('logout', [UserController::class, 'logout']);

    // Transaksi route
    Route::post('checkout', [TransactionController::class, 'checkout']);
    Route::get('transaction', [TransactionController::class, 'all']);
    Route::post('transaction/{id}', [TransactionController::class, 'update']);

    // Keranjang route
    Route::get('cart', [CartController::class, 'getCartItems']); // Get cart items
    Route::post('cart', [CartController::class, 'addToCart']); // Add item to cart
    Route::delete('cart/{id}', [CartController::class, 'removeFromCart']); // Remove item from cart
});

// Auth route
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

// Produk route
Route::get('product', [ProductController::class, 'all']);

// Ulasan route
Route::get('product/{productId}/review', [ReviewController::class, 'index']);
Route::post('product/{productId}/review', [ReviewController::class, 'store'])->middleware('auth:sanctum');

// Midtrans route
Route::post('midtrans/callback', [MidtransController::class, 'callback']);
