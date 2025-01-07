<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LienHeController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\CartController;

// Route cho trang chủ
Route::get('/', function () {
    return view('layouts.user.index');
});
Route::get('/product', function () {
    return view('layouts.user.product');
});
Route::get('/chitiet', function () {
    return view('layouts.user.chitiet');
});
Route::get('/chitiet/{id}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/chitiet/{id}', [ProductController::class, 'show'])->name('product.detail');

Route::get('/about', function () {
    return view('layouts.user.about');
});

Route::get('/user', [UserController::class, 'show'])->name('user.show');
Route::post('/user/update', [UserController::class, 'update'])->name('user.update');

Route::get('/cart', function () {
    return view('layouts.user.cart');
});


// Routes dành cho người dùng đã đăng nhập
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Tạo view dashboard
    })->name('dashboard');
});

Route::get('/about', [BaiVietController::class, 'index'])->name('baiviet.index');
Route::get('/about/{id}', [BaiVietController::class, 'show'])->name('baiviet.contentbaiviet');
Route::get('/contact', [LienHeController::class, 'showView'])->name('contact.form');
Route::post('/contact', [LienHeController::class, 'store'])->name('contact.store');


// Route cho trang dashboard của admin

Route::get('/admin', function () {
    return view('admin.dashboard');
});
// Route cho trang dashboard của admin

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// Nhóm route cho admin
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('danhmucs', DanhMucController::class);
    Route::resource('books', BookController::class)->except(['show']);
    Route::post('books/search', [BookController::class, 'search'])->name('books.search'); // Tìm kiếm sách 
    Route::post('danhmucs/search', [DanhMucController::class, 'search'])->name('danhmucs.search'); // Tìm kiếm danh mục  
});
Route::prefix('admin')->name('admin.')->group(function() {
Route::get('orders', [HoaDonController::class, 'index'])->name('orders.index');  // Danh sách đơn hàng
Route::get('orders/{id}/edit', [HoaDonController::class, 'edit'])->name('orders.edit');  // Form cập nhật đơn hàng
Route::put('orders/{id}', [HoaDonController::class, 'updateOrder'])->name('orders.update');  // Cập nhật đơn hàng
Route::delete('orders/{id}', [HoaDonController::class, 'deleteOrder'])->name('orders.destroy');  // Xoá đơn hàng
});



