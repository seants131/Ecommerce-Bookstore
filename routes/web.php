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
use App\Http\Controllers\UserOrderController;

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
// Route::get('/chitiet/{id}', [ProductController::class, 'show'])->name('product.detail');

Route::get('/about', function () {
    return view('layouts.user.about');
});
Route::get('/cart', function () {
    return view('layouts.user.cart');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);


// Routes dành cho người dùng đã đăng nhập
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Tạo view dashboard
    })->name('dashboard');
});

Route::get('/about', [BaiVietController::class, 'index'])->name('baiviet.index');
Route::get('/about/{baiviet}', [BaiVietController::class, 'show'])->name('baiviet.noidungbaiviet');
Route::get('/contact', [LienHeController::class, 'showView'])->name('contact.form');
Route::post('/contact', [LienHeController::class, 'store'])->name('contact.store');
Route::get('/chinh-sach-bao-mat', function () {
    return view('layouts.user.chinhsach');
})->name('about.chinhsach');
Route::get('/chinh-sach-thanh-toan', function () {
    return view('layouts.user.chinhsachthanhtoan');
})->name('about.chinhsach');
Route::get('/chinh-sach-bao-hanh', function () {
    return view('layouts.user.chinhsachbaohanh');
})->name('about.chinhsach');



// Route cho trang dashboard của admin
Route::get('/admin', [HoaDonController::class, 'index'])->name('admin.dashboard');

// Route cho trang dashboard của admin

Route::get('/admin/dashboard', [HoaDonController::class, 'index'])->name('admin.dashboard');


// Nhóm route cho admin
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('danhmucs', DanhMucController::class);
    Route::resource('books', BookController::class)->except(['show']);
    Route::post('books/search', [BookController::class, 'search'])->name('books.search'); // Tìm kiếm sách
    Route::post('danhmucs/search', [DanhMucController::class, 'search'])->name('danhmucs.search'); // Tìm kiếm danh mục
});
//Route cho đơn hàng admin
Route::prefix('admin')->name('admin.')->group(function() {
Route::get('orders', [HoaDonController::class, 'index'])->name('orders.index');  // Danh sách đơn hàng
Route::get('orders/{id}/edit', [HoaDonController::class, 'edit'])->name('orders.edit');  // Form cập nhật đơn hàng
Route::put('orders/{id}', [HoaDonController::class, 'updateOrder'])->name('orders.update');  // Cập nhật đơn hàng
Route::delete('orders/{id}', [HoaDonController::class, 'deleteOrder'])->name('orders.destroy');  // Xoá đơn hàng
});
Route::prefix('admin')->name('admin.')->group(function () {
    // hiển thị danh sách liên hệ
    Route::get('lien-he', [LienHeController::class, 'index'])->name('lienhe.index');
    // tạo liên hệ
    Route::get('lien-he/create', [LienHeController::class, 'create'])->name('lienhe.create');
    Route::post('lien-he', [LienHeController::class, 'store'])->name('lienhe.store');
    // sửa liên hệ
    Route::get('lien-he/{id}/edit', [LienHeController::class, 'edit'])->name('lienhe.edit');
    Route::put('lien-he/{id}', [LienHeController::class, 'update'])->name('lienhe.update');
    // xóa liên hệ
    Route::delete('lien-he/{id}', [LienHeController::class, 'destroy'])->name('lienhe.destroy');
});

//cái này cho đơn hàng user
Route::prefix('user')->group(function () {
    Route::get('orders', [UserOrderController::class, 'index'])->name('user.orders.index');
    Route::get('orders/{id}', [UserOrderController::class, 'show'])->name('user.orders.show');
    Route::post('orders/{id}/cancel', [UserOrderController::class, 'huyDonHang'])->name('user.orders.cancel');
});
// Route cho trang thông tin đăng ký user
Route::get('/user', [UserController::class, 'show'])->name('user.show');
Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
