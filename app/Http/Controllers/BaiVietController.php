<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    //ham hien thi danh sach bai viet 3 bai viet ngau nhien moi nghi nhan f5
    public function index(){
        $baiviets = BaiViet::where('trangthai', 1)->inRandomOrder()->limit(3)->get();
        $chudetin = BaiViet::where('trangthai', 1)
            ->inRandomOrder()
            ->get()
            ->groupBy('chude');

        return view('layouts.user.about', compact('baiviets', 'chudetin'));
    }

    public function show($id)
    {
        $baiviet = BaiViet::findOrFail($id);
        return view('layouts.user.contentbaiviet', compact('baiviet'));
    }

}
