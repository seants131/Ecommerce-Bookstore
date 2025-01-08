<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    //ham hien thi danh sach bai viet 3 bai viet ngau nhien moi nghi nhan f5
    public function index(Request $request)
    {

        $baiviets = BaiViet::where('trangthai', 1)
                            ->where('chude', 'Văn học')
                            ->paginate(1);
        $chudenthieunhi = BaiViet::where('trangthai', 1)
                                  ->where('chude', 'Sách thiếu nhi')
                                  ->inRandomOrder()
                                  ->take(3)
                                  ->get();
                                  $baivietnhom = BaiViet::where('trangthai', 1)
                                  ->where('chude', 'Thông tin nhóm')
                                  ->take(1)
                                  ->get();
        $chudevanhochiendai = BaiViet::where('trangthai', 1)
                                  ->where('chude', 'Văn học hiện đại')
                                  ->inRandomOrder()
                                  ->take(3)
                                  ->get();
                                  $chudenvanhoccodien = BaiViet::where('trangthai', 1)
                                  ->where('chude', 'Văn học cổ điển')
                                  ->inRandomOrder()
                                  ->take(3)
                                  ->get();
        return view('layouts.user.about', compact('baiviets', 'chudenthieunhi','chudevanhochiendai','chudenvanhoccodien','baivietnhom'));
    }

    //tim bai viet theo slug
    public function show(BaiViet $baiviet)
    {
        $baiviettt = BaiViet::where('chude', $baiviet->chude)
                            ->where('id', '!=', $baiviet->id)
                            ->limit(5)
                            ->get();

        return view('layouts.user.noidungbaiviet', compact('baiviet', 'baiviettt'));
    }


}
