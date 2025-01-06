<?php

namespace App\Http\Controllers;
use App\Models\HoaDon;
use Illuminate\Support\Facades\Auth;
use App\Models\NguoiDung;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function index()
    {
        $userId = Auth::id() ?? NguoiDung::find(1);
        $orders = HoaDon::where('MaKhachHang', $userId)->get();
        return view('Layouts.user.orders', compact('orders'));
    }

    public function show($id)
    {
        $order = HoaDon::findOrFail($id);
        return view('user.orders.show', compact('order'));
    }
}
