<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LienHeController;

// Route cho trang chủ
Route::get('/', function () {
    return view('layouts.user.index');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/product', function () {
    return view('layouts.user.product');
});
Route::get('/about', function () {
    return view('layouts.user.about');
});
Route::get('/user', function () {
    return view('layouts.user.user');
});
Route::get('/cart', function () {
    return view('layouts.user.cart');
});

Route::get('/contact', [LienHeController::class, 'showView'])->name('contact.form');
Route::post('/contact', [LienHeController::class, 'store'])->name('contact.store');

// Route cho trang dashboard của admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// Nhóm route cho admin
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('danhmucs', DanhMucController::class);
    Route::resource('books', BookController::class)->except(['show']);
    Route::post('books/search', [BookController::class, 'search'])->name('books.search'); // Tìm kiếm sách 
    Route::post('danhmucs/search', [DanhMucController::class, 'search'])->name('danhmucs.search'); // Tìm kiếm danh mục  
});




