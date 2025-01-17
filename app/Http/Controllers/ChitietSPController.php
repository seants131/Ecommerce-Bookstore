<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DanhMuc;
use App\Models\Sach;

class ChitietSPController extends Controller
{
    public function index($slug)
    {
        $chitietsp = DB::table('sach')->where('slug', $slug)->first();
        
        $danhmucs = DanhMuc::with('children')->whereNull('parent_id')->get();
        $books = Sach::with('DanhMuc')->get(); 
        $theloaisach = Sach::with('DanhMuc')->where('slug', $slug)->first();
        return view('layouts.user.chitiet', compact('chitietsp', 'danhmucs', 'books', 'theloaisach'));
    }
    public function getSoLuong($slug)
    {
        $chitietsp = DB::table('sach')->where('slug', $slug)->first();

        if (!$chitietsp) {
            return response()->json(['error' => 'Sản phẩm không tồn tại'], 404);
        }

        return response()->json(['SoLuong' => $chitietsp->SoLuong]);
    }
}
