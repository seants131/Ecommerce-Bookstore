<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $doanhthutrangweb = DB::table('hoadon')
            ->where('TrangThai', 'Hoàn thành')
            ->sum('TongTien');

        $tongdonhang = DB::table('hoadon')
            ->whereIn('TrangThai', ['Hoàn thành', 'Đang giao hàng', 'Đang chờ'])
            ->count();

        $nguoidung = DB::table('users')
            ->count();

        $sach = DB::table('sach')
            ->sum('SoLuong');

        return view('admin.dashboard', compact('doanhthutrangweb', 'tongdonhang', 'nguoidung', 'sach'));
    }
}
