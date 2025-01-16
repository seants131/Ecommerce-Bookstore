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
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\ChitietSPController;

// Route cho trang chủ
Route::get('/', [DanhMucController::class, 'getbook']);
Route::get('/product', [DanhMucController::class, 'getproduct']);
Route::get('/cart', [DanhMucController::class, 'getcart']);

// Route::get('/chitiet/{id}', [ProductController::class, 'show'])->name('product.detail');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);

// Routes dành cho người dùng đã đăng nhập
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Tạo view dashboard
    })->name('dashboard');
});

Route::get('/{slug}', [ChitietSPController::class, 'index'])->name('chitietsp.index');
Route::get('/{slug}/soluong', [ChitietSPController::class, 'getSoLuong'])->name('chitietsp.soluong');

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

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/export-books', [AdminController::class, 'exportBooks'])->name('admin.export.books');
});
// Route cho trang dashboard của admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard/edit/{id}', [AdminController::class, 'edit'])->name('post.edit');
Route::put('/admin/dashboard/update/{id}', [AdminController::class, 'update'])->name('post.update');

// Nhóm route danh mục và sản phẩm admin
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('danhmucs', DanhMucController::class);
        Route::resource('books', BookController::class)->except(['show']);
        Route::post('books/search', [BookController::class, 'search'])->name('books.search'); // Tìm kiếm sách
        Route::post('danhmucs/search', [DanhMucController::class, 'search'])->name('danhmucs.search'); // Tìm kiếm danh mục
    });
//Route cho đơn hàng admin
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('orders', [HoaDonController::class, 'index'])->name('orders.index'); // Danh sách đơn hàng
        Route::get('orders/{id}/edit', [HoaDonController::class, 'edit'])->name('orders.edit'); // Form cập nhật đơn hàng
        Route::put('orders/{id}', [HoaDonController::class, 'updateOrder'])->name('orders.update'); // Cập nhật đơn hàng
        Route::delete('orders/{id}', [HoaDonController::class, 'deleteOrder'])->name('orders.destroy'); // Xoá đơn hàng
    });
//route cho liên hệ admin
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('lien-he', [LienHeController::class, 'index'])->name('lienhe.index');
        Route::get('lien-he/create', [LienHeController::class, 'create'])->name('lienhe.create');
        Route::post('lien-he', [LienHeController::class, 'store'])->name('lienhe.store');
        Route::get('lien-he/{id}/edit', [LienHeController::class, 'edit'])->name('lienhe.edit');
        Route::put('lien-he/{id}', [LienHeController::class, 'update'])->name('lienhe.update');
        Route::delete('lien-he/{id}', [LienHeController::class, 'destroy'])->name('lienhe.destroy');
    });
// Route cho đánh giá sản phẩm admin
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('danhgia', [DanhGiaController::class, 'index'])->name('danhgia.index'); // xóa đánh giá
        Route::delete('danhgia/{id}', [DanhGiaController::class, 'destroy'])->name('danhgia.destroy');
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
