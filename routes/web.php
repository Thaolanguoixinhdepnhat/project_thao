<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductClassController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\Product\ProductController as UserProductController;
use App\Http\Controllers\User\Cart\CartController;
use App\Http\Controllers\User\Order\OrderController;
use App\Http\Controllers\User\AppController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\User\Contact\ContactController;
use App\Http\Controllers\OrderController as AdminOrderController;


use App\Http\Controllers\StatusController;

//abc

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/abc', function () {
//     return view('admin.login');
// });

Route::get('/', [UsersController::class, 'index']);
Route::post('/store-customer', [AuthController::class, 'store'])->name('store');



Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'index_login'])->name('index_login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/user/logout', [AuthController::class, 'logout'])->name('user.logout');


Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', function () {
        return view('layout.app');
    })->name('admin');
    
    /**meker */
    Route::get('/maker', [MakerController::class, 'index'])->name('maker.index');
    Route::delete('/maker/{id}', [MakerController::class, 'destroy'])->name('maker.destroy');
    Route::get('/makers/{id}/edit', [MakerController::class, 'edit'])->name('maker.edit');
    Route::put('/makers/{id}', [MakerController::class, 'update'])->name('maker.update');
    Route::get('/maker/create', [MakerController::class, 'create'])->name('maker.create');
    Route::post('/maker/create', [MakerController::class, 'store'])->name('maker.store');
    /**category */
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/categorys/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/categorys/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');


    /* product */
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');

    /* order */
    Route::get('/order', [AdminOrderController::class, 'index'])->name('admin.order.index');
    Route::get('/order/summary', [AdminOrderController::class, 'summary'])->name('order.summary');
    Route::get('/order/{id}', [AdminOrderController::class, 'detail'])->name('admin.order.detail');
    Route::post('/order/ship', [AdminOrderController::class, 'updateOrderShipping'])->name('orders.ship');
    Route::get('/chart-data', [AdminOrderController::class, 'revenueByMonth'])->name('chart');


    // thử tính số đơn số tiền



});
    Route::post('/order/complete', [AdminOrderController::class, 'markComplete'])->name('admin.order.complete');

Route::get('/admin/login', [StaffController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [StaffController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [StaffController::class, 'logout'])->name('admin.logout');
Route::post('/admin/register', [StaffController::class, 'register'])->name('admin.register.submit');
Route::get('/admin/change-password', [StaffController::class, 'showChangePasswordForm'])->name('admin.change_password');
Route::post('/admin/change-password', [StaffController::class, 'changePassword'])->name('admin.change_password.post');

// status
Route::get('/status', [StatusController::class, 'index'])->name('status.index');
Route::delete('/status/{id}', [StatusController::class, 'destroy'])->name('status.destroy');
Route::get('/statuss/{id}/edit', [StatusController::class, 'edit'])->name('status.edit');
Route::put('/statuss/{id}', [StatusController::class, 'update'])->name('status.update');
Route::get('/status/create', [StatusController::class, 'create'])->name('status.create');
Route::post('/status/create', [StatusController::class, 'store'])->name('status.store');

Route::get('/productclass/edit/{id}', [ProductClassController::class, 'edit'])->name('productclass.edit');
Route::put('/productclass/{id}', [ProductClassController::class, 'update'])->name('productclass.update');
Route::delete('/productclass/{id}', [ProductClassController::class, 'destroy'])->name('productclass.destroy');
Route::get('/productclass/search', [ProductClassController::class, 'search'])->name('productclass.search');

// Danh sách nhân viên
Route::get('/staff', [StaffController::class, 'index'])->name('admin.register_index');
// Hiển thị form tạo mới
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
// Lưu nhân viên mới
Route::post('/staff/create', [StaffController::class, 'store'])->name('staff.store');
// Hiển thị form chỉnh sửa
Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
Route::put('/staff/{id}', [StaffController::class, 'update'])->name('staff.update');
// Xóa nhân viên
Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');

// thử đổ thông tin nhân viên ra

Route::get('/admin/home', [StaffController::class, 'showHomePage'])->name('homeadmin.index');
Route::post('/admin/update-profile', [StaffController::class, 'updateProfile'])->name('homeadmin.update');



/* trang chủ*/
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/products', [UserProductController::class, 'index'])->name('xxx');
// Route::get('/cart', [CartController::class, 'index'])->name('xxx');
Route::prefix('user')->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart_index');
    Route::delete('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.delete');
    Route::post('/update-cart', [CartController::class, 'updateCart'])->name('update.cart');
Route::get('/product/{id}', [ProductController::class, 'detail'])->name('product.detail');


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/tvtt', [ContactController::class, 'tvtt'])->name('contact.tvtt');
Route::get('/contact/dhlsc', [ContactController::class, 'dhlsc'])->name('contact.dhlsc');
Route::get('/contact/glxs25', [ContactController::class, 'glxs25'])->name('contact.glxs25');
Route::get('/contact/ssai', [ContactController::class, 'ssai'])->name('contact.ssai');
Route::get('/contact/sale', [ContactController::class, 'sale'])->name('contact.sale');
Route::get('/contact/sane', [ContactController::class, 'sane'])->name('contact.sane');
Route::get('/contact/bh', [ContactController::class, 'bh'])->name('contact.bh');

});

Route::post('/submit-rating', [AppController::class, 'comment'])->name('submit.rating');





  





// thử tìm kiếm 
Route::get('/products', [UserProductController::class, 'index'])->name('user.products.index');
Route::get('/details/{id}', [UserProductController::class, 'detail'])->name('user.detail');
Route::get('/search', [AppController::class, 'search'])->name('search');


Route::get('/get-product-class', [AppController::class, 'getProductClassByColorAndSize'])->name('getProductClassByColorAndSize');
Route::get('/home', [AppController::class, 'home'])->name('home_user');
Route::get('/order', [AppController::class, 'order'])->name('user.order');
Route::get('/cartttt', [AppController::class, 'cart'])->name('user.cart');

Route::post('/user/update', [AppController::class, 'update'])->name('user.update');



Route::get('/doi-mat-khau', [CustomerController::class, 'showChangePasswordForm'])->name('user.show_change_password');
Route::post('/doi-mat-khau', [CustomerController::class, 'changePassword'])->name('user.change_password');




Route::get('/', [AppController::class, 'index'])->name('home');


Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('/check', [OrderController::class, 'index'])->name('order.index');



Route::get('/layout', function () {
    return view('layout.app');
})->name('layout.app');

























