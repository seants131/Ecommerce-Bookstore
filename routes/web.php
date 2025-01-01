<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\BookController;

// Route cho trang chủ
Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/admin', function () {
    return view('admin.dashboard');
});
// Route cho trang dashboard của admin
=======

>>>>>>> e669e35c582d6d969e54bbb9141bffc07143b0ca
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// Nhóm route cho admin
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('danhmucs', DanhMucController::class);
    Route::resource('books', BookController::class)->except(['show']);
    Route::post('books/search', [BookController::class, 'search'])->name('books.search'); // Tìm kiếm sách 
    Route::post('danhmucs/search', [DanhMucController::class, 'search'])->name('danhmucs.search'); // Tìm kiếm danh mục  
});


// // Route cho trang danhmuc của admin
// Route::prefix('admin')->name('admin.')->group(function() {
//     Route::resource('danhmucs', DanhMucController::class);
// });
// // Route cho trang sach của admin
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('books', BookController::class);
// });



// Nhóm route cho admin
/*Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('danhmucs', DanhMucController::class);
    Route::resource('books', BookController::class);
});*/