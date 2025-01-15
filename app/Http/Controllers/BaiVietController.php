<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'desc'); // bai viet moi nhat // asc la cu nhat
        $baiviets = BaiViet::where('trangthai', 1)
            ->where('chude', '!=', 'Thông tin nhóm')
            ->when($search, function ($query, $search) {
                return $query->where('tieude', 'LIKE', "%{$search}%")
                             ->orWhere('noidung', 'LIKE', "%{$search}%");
            })
            ->orderBy('created_at', $sort) // Sắp xếp theo ngày tạo
            ->paginate(3);

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

        $tamlyhoc = BaiViet::where('trangthai', 1)
                           ->where('chude', 'Tâm lý học')
                           ->inRandomOrder()
                           ->take(3)
                           ->get();

        return view('layouts.user.about', compact(
            'baiviets',
            'chudenthieunhi',
            'chudevanhochiendai',
            'chudenvanhoccodien',
            'baivietnhom',
            'tamlyhoc',
            'search'
        ));
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
