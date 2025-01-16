<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AdminExport;
use App\Models\BaiViet;
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

        $ndweb = DB::table('baiviet')
            ->where('id', 28)
            ->first();
           
        return view('admin.trangchu.dashboard', compact('doanhthutrangweb', 'tongdonhang', 'nguoidung', 'sach', 'ndweb'));
    }
    public function edit($id) {
        $ndweb = DB::table('baiviet')->where('id', $id)->first();
        return view('admin.trangchu.edit', compact('ndweb'));  // Trả về view chỉnh sửa
    }
    
    // Cập nhật thông tin bài viết
    public function update(Request $request, $id) {
        // Validation và cập nhật dữ liệu
        $request->validate([
            'tieude' => 'required',
            'noidung' => 'required',
        ]);
    
        $thongtin = BaiViet::find($id);
        $thongtin->update([
            'tieude' => $request->tieude,
            'noidung' => $request->noidung,
        ]);
        return redirect()->route('admin.dashboard')->with('success', 'Cập nhật thành công'); // Chuyển hướng về trang dashboard
    }
    public function exportBooks()
    {
        return Excel::download(new AdminExport, 'admin.xlsx');
    }
}
