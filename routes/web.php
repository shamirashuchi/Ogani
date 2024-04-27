<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OganiController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\CustomerController;

Route::get('/',[OganiController::class,'index'])->name('home');
Route::get('/product-category/{id}',[OganiController::class,'category'])->name('product-category');
Route::get('/product-sub-category/{id}',[OganiController::class,'subCategory'])->name('product-sub-category');
Route::get('/product-detail/{id}',[OganiController::class,'product'])->name('product-detail');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::post('/new/order',[CheckoutController::class,'newOrder'])->name('new.order');
Route::get('/complete-order',[CheckoutController::class,'completeOrder'])->name('complete-order');
//Route::get('/customer/login',[CustomerAuthController::class,'login'])->name('customer.login');
//Route::get('/customer/register',[CustomerAuthController::class,'register'])->name('customer.register');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


Route::get('/customer/login',[CustomerAuthController::class,'login'])->name('customer.login');
Route::post('/customer/login',[CustomerAuthController::class,'loginCheck'])->name('customer.login');
Route::get('/customer/register',[CustomerAuthController::class,'register'])->name('customer.register');
Route::post('/customer/register',[CustomerAuthController::class,'newCustomer'])->name('customer.register');

Route::middleware(['customer'])->group(function (){
    Route::get('/customer-dashboard',[CustomerAuthController::class,'dashboard'])->name('customer.dashboard');
    Route::get('/customer/logout',[CustomerAuthController::class,'logout'])->name('customer.logout');
    Route::get('/cart/show',[CartController::class,'index'])->name('cart.show');
    Route::post('/cart/add',[CartController::class,'addCart'])->name('cart.add');
    Route::post('/cart/update/{row_id}',[CartController::class,'update'])->name('cart.update');
    Route::get('/cart/delete/{row_id}',[CartController::class,'delete'])->name('cart.delete');
});

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/manage', [UserController::class, 'index'])->name('user.index');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/manage', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/newcreatedrequest', [CategoryController::class, 'newcreatedrequest'])->name('category.newcreatedrequest');
    Route::get('/category/newrequest', [CategoryController::class, 'newrequest'])->name('category.newrequest');
    Route::get('/category/accept/{id}', [CategoryController::class, 'accept'])->name('category.accept');
    Route::get('/category/cancel/{id}', [CategoryController::class, 'cancel'])->name('category.cancel');
    Route::get('/category/deleterequest/{id}', [CategoryController::class, 'deleterequest'])->name('category.deleterequest');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/newUpdatedRequest', [CategoryController::class, 'newupdaterequest'])->name('category.newUpdatedRequest');
    Route::get('/category/updatedRequest', [CategoryController::class, 'updaterequest'])->name('category.updatedRequest');
    Route::get('/category/acceptbyadmin/{id}', [CategoryController::class, 'acceptbyadmin'])->name('category.acceptbyadmin');
    Route::get('/category/cancelbyadmin/{id}', [CategoryController::class, 'cancelbyadmin'])->name('category.cancelbyadmin');
    Route::get('/category/deletebyuser/{id}', [CategoryController::class, 'deletebyuser'])->name('category.deletebyuser');


    Route::get('/sub-category/manage', [SubCategoryController::class, 'index'])->name('sub-category.index');
    Route::get('/sub-category/create', [SubCategoryController::class, 'create'])->name('sub-category.create');
    Route::post('/sub-category/store', [SubCategoryController::class, 'store'])->name('sub-category.store');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
//    Route::post('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
//    Route::get('/sub-category/delete/{id}', [SubCategoryController::class, 'delete'])->name('sub-category.delete');

    Route::get('/brand/manage', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/unit/manage', [UnitController::class, 'index'])->name('unit.index');
    Route::get('/unit/create', [UnitController::class, 'create'])->name('unit.create');
    Route::post('/unit/store', [UnitController::class, 'store'])->name('unit.store');
    Route::get('/unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}', [UnitController::class, 'update'])->name('unit.update');
    Route::get('/unit/delete/{id}', [UnitController::class, 'delete'])->name('unit.delete');

    Route::get('/product/manage', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/get-sub-category-by-category-id', [ProductController::class, 'getSubCategoryByCategory'])->name('get-sub-category-by-category-id');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

    Route::get('/manage/order', [OrderController::class, 'index'])->name('manage.order');
    Route::get('/order/detail/{id}', [OrderController::class, 'orderDetail'])->name('order.detail');
    Route::get('/order/invoice/{id}', [OrderController::class, 'orderInvoice'])->name('order.invoice');
    Route::get('/order/edit/{id}', [OrderController::class, 'orderEdit'])->name('order.edit');
    Route::post('/order/update', [OrderController::class, 'orderUpdate'])->name('order.update');
    Route::get('/order/delete/{id}', [OrderController::class, 'delete'])->name('order.delete');

    Route::get('/manage/customer', [CustomerController::class, 'index'])->name('manage.customer');
//    Route::get('/customer/detail/{id}', [OrderController::class, 'orderDetail'])->name('order.detail');
//    Route::get('/customer/invoice/{id}', [OrderController::class, 'orderInvoice'])->name('order.invoice');
//    Route::get('/customer/edit/{id}', [OrderController::class, 'orderEdit'])->name('order.edit');
//    Route::post('/customer/update', [OrderController::class, 'orderUpdate'])->name('order.update');
//    Route::get('/customer/delete/{id}', [OrderController::class, 'delete'])->name('order.delete');


    Route::resource('courier', CourierController::class);
//
//    MAIL_MAILER=log
//MAIL_HOST=127.0.0.1
//MAIL_PORT=2525
//MAIL_USERNAME=null
//MAIL_PASSWORD=null
//MAIL_ENCRYPTION=null
//MAIL_FROM_ADDRESS="hello@example.com"
//MAIL_FROM_NAME="${APP_NAME}"
});
