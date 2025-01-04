<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    //ham hien thi danh sach bai viet 3 bai viet ngau nhien moi nghi nhan f5
    public function index(Request $request)
    {
        $search = $request->input('search', '');
        $baiviets = BaiViet::where('trangthai', 1)
            ->where('tieude', 'like', '%' . $search . '%')
            ->orWhere('noidung', 'like', '%' . $search . '%')
            ->paginate(3);
        $chudetin = BaiViet::where('trangthai', 1)->inRandomOrder()->get()->groupBy('chude')->take(3);

        return view('layouts.user.about', compact('baiviets', 'chudetin'));
    }


    public function show($id)
    {
        $baiviet = BaiViet::findOrFail($id);
        $baiviettt = BaiViet::where('chude', $baiviet->chude)
                                ->where('id', '!=', $baiviet->id)  // de k thay bai viet hien tai xuat ra nua
                                ->limit(5)
                                ->get();

        return view('layouts.user.contentbaiviet', compact('baiviet', 'baiviettt'));
    }
}
