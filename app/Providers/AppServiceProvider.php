<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Thêm namespace View
use App\Models\DanhMuc; // Thêm namespace DanhMuc
use App\Models\Sach;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Chia sẻ biến $danhmucs với tất cả các view sử dụng layout.user.layout
        View::composer('layouts.user.layout', function ($view) {
            $view->with('danhmucs', DanhMuc::with('children')->withCount('books')->get());
        });
        View::composer('layouts.user.layout', function ($view) {
            $view->with('books', Sach::all()); // Lấy tất cả sách (hoặc thêm logic phù hợp)
            });
    }
}
