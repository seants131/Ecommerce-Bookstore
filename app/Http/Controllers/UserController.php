<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;

class UserController extends Controller
{
    public function login(){
        return view('fe.login');
    }

    public function show()
    {
        $nguoiDung = NguoiDung::first() ?? NguoiDung::find(1); // Hiện khoa chưa làm xong hệ thống đăng nhập nên, tôi lấy mặc định người dùng có mã là 1 

        return view('layouts.user.user', compact('nguoiDung'));
    }

    public function update(Request $request)
    {
        $nguoiDung = NguoiDung::where('MaKhachHang', $request->input('MaKhachHang'))->first(); 
        if (!$nguoiDung) {
            return redirect()->back()->with('error', 'Cập nhật không thành công');
        }

        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $nguoiDung->Email = $request->input('email');
        $nguoiDung->SoDienThoai = $request->input('phone');
        $nguoiDung->DiaChi = $request->input('address');
        $nguoiDung->save();

        return redirect()->back()->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
    }
}