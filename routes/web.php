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
use App\Http\Controllers\ChatsController;
//Route::group([ 'middleware' => 'auth' ], function () {
//    // ...
//
//});

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
//    Route::get('/chat', [ChatsController::class,'index'])->name('chat');
//    Route::get('message', [ChatsController::class,'fetchMessages']);
    Route::post('/send-messages', [ChatsController::class,'sendMessage']);


});

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/manage', [UserController::class, 'index'])->name('user.index');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/notifications', [UserController::class,'notifications']);

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



    Route::get('/sub-category/create', [SubCategoryController::class, 'create'])->name('sub-category.create');
    Route::get('/sub-category/manage', [SubCategoryController::class, 'index'])->name('sub-category.index');
    Route::post('/sub-category/store', [SubCategoryController::class, 'store'])->name('sub-category.store');
    Route::get('/sub-category/newcreatedrequest', [SubCategoryController::class, 'newcreatedrequest'])->name('sub-category.newcreatedrequest');
    Route::get('/sub-category/newrequest', [SubCategoryController::class, 'newrequest'])->name('sub-category.newrequest');
    Route::get('/sub-category/accept/{id}', [SubCategoryController::class, 'accept'])->name('sub-category.accept');
    Route::get('/sub-category/cancel/{id}', [SubCategoryController::class, 'cancel'])->name('sub-category.cancel');
    Route::get('/sub-category/deleterequest/{id}', [SubCategoryController::class, 'deleterequest'])->name('sub-category.deleterequest');
    Route::get('/sub-category/delete/{id}', [SubCategoryController::class, 'delete'])->name('sub-category.delete');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::get('/sub-category/newUpdatedRequest', [SubCategoryController::class, 'newupdaterequest'])->name('sub-category.newUpdatedRequest');
    Route::get('/sub-category/updatedRequest', [SubCategoryController::class, 'updaterequest'])->name('sub-category.updatedRequest');
    Route::get('/sub-category/acceptbyadmin/{id}', [SubCategoryController::class, 'acceptbyadmin'])->name('sub-category.acceptbyadmin');
    Route::get('/sub-category/cancelbyadmin/{id}', [SubCategoryController::class, 'cancelbyadmin'])->name('sub-category.cancelbyadmin');
    Route::get('/sub-category/deletebyuser/{id}', [SubCategoryController::class, 'deletebyuser'])->name('sub-category.deletebyuser');


    Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::get('/brand/manage', [BrandController::class, 'index'])->name('brand.index');
    Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/newcreatedrequest', [BrandController::class, 'newcreatedrequest'])->name('brand.newcreatedrequest');
    Route::get('/brand/newrequest', [BrandController::class, 'newrequest'])->name('brand.newrequest');
    Route::get('/brand/accept/{id}', [BrandController::class, 'accept'])->name('brand.accept');
    Route::get('/brand/cancel/{id}', [BrandController::class, 'cancel'])->name('brand.cancel');
    Route::get('/brand/deleterequest/{id}', [BrandController::class, 'deleterequest'])->name('brand.deleterequest');
    Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/brand/newUpdatedRequest', [BrandController::class, 'newupdaterequest'])->name('brand.newUpdatedRequest');
    Route::get('/brand/updatedRequest', [BrandController::class, 'updaterequest'])->name('brand.updatedRequest');
    Route::get('/brand/acceptbyadmin/{id}', [BrandController::class, 'acceptbyadmin'])->name('brand.acceptbyadmin');
    Route::get('/brand/cancelbyadmin/{id}', [BrandController::class, 'cancelbyadmin'])->name('brand.cancelbyadmin');
    Route::get('/brand/deletebyuser/{id}', [BrandController::class, 'deletebyuser'])->name('brand.deletebyuser');


    Route::get('/unit/create', [UnitController::class, 'create'])->name('unit.create');
    Route::get('/unit/manage', [UnitController::class, 'index'])->name('unit.index');
    Route::post('/unit/store', [UnitController::class, 'store'])->name('unit.store');
    Route::get('/unit/newcreatedrequest', [UnitController::class, 'newcreatedrequest'])->name('unit.newcreatedrequest');
    Route::get('/unit/newrequest', [UnitController::class, 'newrequest'])->name('unit.newrequest');
    Route::get('/unit/accept/{id}', [UnitController::class, 'accept'])->name('unit.accept');
    Route::get('/unit/cancel/{id}', [UnitController::class, 'cancel'])->name('unit.cancel');
    Route::get('/unit/deleterequest/{id}', [UnitController::class, 'deleterequest'])->name('unit.deleterequest');
    Route::get('/unit/delete/{id}', [UnitController::class, 'delete'])->name('unit.delete');
    Route::get('/unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}', [UnitController::class, 'update'])->name('unit.update');
    Route::get('/unit/newUpdatedRequest', [UnitController::class, 'newupdaterequest'])->name('unit.newUpdatedRequest');
    Route::get('/unit/updatedRequest', [UnitController::class, 'updaterequest'])->name('unit.updatedRequest');
    Route::get('/unit/acceptbyadmin/{id}', [UnitController::class, 'acceptbyadmin'])->name('unit.acceptbyadmin');
    Route::get('/unit/cancelbyadmin/{id}', [UnitController::class, 'cancelbyadmin'])->name('unit.cancelbyadmin');
    Route::get('/unit/deletebyuser/{id}', [UnitController::class, 'deletebyuser'])->name('unit.deletebyuser');

    Route::get('/pick/{user_id}/{customer_id}/{product_id}', [ChatsController::class, 'index'])->name('chat');

    Route::post('/pick/{user_id}/{customer_id}/{product_id}', [ChatsController::class, 'admin'])->name('chat');
    Route::get('/chataccept', [ChatsController::class,'chataccept'])->name('chataccept');
//    Route::post('/send-messages', [ChatsController::class,'sendMessage']);
    Route::get('/get-sub-category-by-category-id', [ProductController::class, 'getSubCategoryByCategory'])->name('get-sub-category-by-category-id');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/product/manage', [ProductController::class, 'index'])->name('product.index');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/newcreatedrequest', [ProductController::class, 'newcreatedrequest'])->name('product.newcreatedrequest');
    Route::get('/product/newrequest', [ProductController::class, 'newrequest'])->name('product.newrequest');
    Route::get('/product/accept/{id}', [ProductController::class, 'accept'])->name('product.accept');
    Route::get('/product/cancel/{id}', [ProductController::class, 'cancel'])->name('product.cancel');
    Route::get('/product/deleterequest/{id}', [ProductController::class, 'deleterequest'])->name('product.deleterequest');
    Route::get('/product/newUpdatedRequest', [ProductController::class, 'newupdaterequest'])->name('product.newUpdatedRequest');
    Route::get('/product/updatedRequest', [ProductController::class, 'updaterequest'])->name('product.updatedRequest');


    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/product/acceptbyadmin/{id}', [ProductController::class, 'acceptbyadmin'])->name('product.acceptbyadmin');
    Route::get('/product/cancelbyadmin/{id}', [ProductController::class, 'cancelbyadmin'])->name('product.cancelbyadmin');
    Route::get('/product/deletebyuser/{id}', [ProductController::class, 'deletebyuser'])->name('product.deletebyuser');
    Route::get('/product/deleteimage/{id}', [ProductController::class, 'deleteimage'])->name('product.deleteimage');

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
