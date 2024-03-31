<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OganiController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
Route::get('/',[OganiController::class,'index'])->name('home');
Route::get('/product-category',[OganiController::class,'category'])->name('product-category');
Route::get('/product-detail',[OganiController::class,'product'])->name('product-detail');
Route::get('/cart/show',[CartController::class,'index'])->name('cart.show');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::get('/customer/login',[CustomerAuthController::class,'login'])->name('customer.login');
Route::get('/customer/register',[CustomerAuthController::class,'register'])->name('customer.register');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/manage', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});
