<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OganiController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\DashboardController;
Route::get('/',[OganiController::class,'index'])->name('home');
Route::get('/product-category',[OganiController::class,'category'])->name('product-category');
Route::get('/product-detail',[OganiController::class,'product'])->name('product-detail');
Route::get('/cart/show',[CartController::class,'index'])->name('cart.show');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::get('/customer/login',[CustomerAuthController::class,'login'])->name('customer.login');
Route::get('/customer/register',[CustomerAuthController::class,'register'])->name('customer.register');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
