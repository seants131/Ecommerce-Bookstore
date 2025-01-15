<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DanhMuc;
use App\Models\Sach;

class ChitietSPController extends Controller
{
    public function index($id)
    {
        $chitietsp = DB::table('sach')->where('MaSach', $id)->first();
        $danhmucs = DanhMuc::with('children')->whereNull('parent_id')->get();
        $books = Sach::with('DanhMuc')->get();
        return view('layouts.user.chitiet', compact('chitietsp', 'danhmucs', 'books'));
    }

    public function getSoLuong($id)
    {
        // Lấy số lượng sản phẩm từ cơ sở dữ liệu
        $chitietsp = DB::table('sach')->where('MaSach', $id)->first();

        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$chitietsp) {
            return response()->json(['error' => 'Sản phẩm không tồn tại'], 404);
        }

        // Trả về số lượng sản phẩm dưới dạng JSON
        return response()->json(['quantity' => $chitietsp->SoLuong]);
    }
}
