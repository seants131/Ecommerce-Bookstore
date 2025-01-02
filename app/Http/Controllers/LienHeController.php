<?php

namespace App\Http\Controllers;

use App\Models\LienHe;
use Illuminate\Http\Request;

class LienHeController extends Controller
{
    public function showView()
    {
        return view('layouts.user.contact');
    }
    public function store(Request $request){
        $request->validate([
            'ho_ten' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'chu_de' => 'nullable|string|max:255',
            'noi_dung' => 'required|string',
        ]);
        LienHe::create([
            'ho_ten' => $request->ho_ten,
            'email' => $request->email,
            'chu_de' => $request->chu_de,
            'noi_dung' => $request->noi_dung,
        ]);
        return back()->with('success', 'Thông tin liên hệ đã được gửi.');
    }
}
