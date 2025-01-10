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




    //Hiển thị danh sách liên hệ
    public function index()
    {
        $lienHes = LienHe::all();
        return view('admin.lienhe.index', compact('lienHes'));
    }
    //Hiển thị form tạo mới liên hệ
    public function create()
    {
        return view('admin.lienhe.create');
    }
    // Hiển thị form chỉnh sửa liên hệ
    public function edit($id)
    {
        $lienHe = LienHe::findOrFail($id);
        return view('admin.lienhe.edit', compact('lienHe'));
    }

    // Cập nhật thông tin liên hệ
    public function update(Request $request, $id)
    {
        $request->validate([
            'ho_ten' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'chu_de' => 'nullable|string|max:255',
            'noi_dung' => 'required|string',
        ]);

        $lienHe = LienHe::findOrFail($id);
        $lienHe->update([
            'ho_ten' => $request->ho_ten,
            'email' => $request->email,
            'chu_de' => $request->chu_de,
            'noi_dung' => $request->noi_dung,
        ]);

        return redirect()->route('admin.lienhe.index')->with('success', 'Liên hệ đã được cập nhật.');
    }

    // Xóa liên hệ
    public function destroy($id)
    {
        $lienHe = LienHe::findOrFail($id);
        $lienHe->delete();

        return redirect()->route('admin.lienhe.index')->with('success', 'Liên hệ đã được xóa.');
    }
}
