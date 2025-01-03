<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\BookController;

// Route cho trang chủ
Route::get('/', function () {
    return view('layouts.user.index');
});
Route::get('/contact', function () {
    return view('layouts.user.contact');
});
Route::get('/delivery', function () {
    return view('layouts.user.delivery');
});
Route::get('/special', function () {
    return view('layouts.user.specials');
});
Route::get('/products', function () {
    return view('layouts.user.products');
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

Route::get('/user', function () {
    return view('layouts.user.index');
});