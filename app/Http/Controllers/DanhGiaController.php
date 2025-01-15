<?php
namespace App\Http\Controllers;

use App\Models\DanhGia;

class DanhGiaController extends Controller
{
    public function index()
    {
        $danhgias = DanhGia::all();
        return view('admin.danhgia.index', compact('danhgias'));
    }
    public function destroy($id)
    {
        $danhgia = DanhGia::findOrFail($id);
        $danhgia->delete();

        return redirect()->route('admin.danhgia.index')->with('success', 'Đánh giá đã được xóa thành công.');
    }
}
