<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\BookController;

// Route cho trang chủ
Route::get('/', function () {
    return view('layouts.user.index');
});
Route::get('/product', function () {
    return view('layouts.user.product');
});
Route::get('/about', function () {
    return view('layouts.user.about');
});
Route::get('/contact', function () {
    return view('layouts.user.contact');
});
Route::get('/cart', function () {
    return view('layouts.user.cart');
});
Route::get('/user', function () {
    return view('layouts.user.user');
});

Route::get('/admin', function () {
    return view('admin.danhmucs.dashboard');
});
// Route cho trang dashboard của admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// Route cho trang danhmuc của admin
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('danhmucs', DanhMucController::class);
});
// Route cho trang sach của admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('books', BookController::class);
});
