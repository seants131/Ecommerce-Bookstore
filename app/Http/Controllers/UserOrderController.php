<?php

namespace App\Http\Controllers;

use App\Models\ChiTietHoaDon;
use App\Models\HoaDon;
use App\Models\Sach;
use Illuminate\Support\Facades\Auth;
use App\Models\NguoiDung;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function index()
    {
        $userId = Auth::id() ?? 1;
        $orders = HoaDon::where('MaKhachHang', $userId)->get();
        return view('Layouts.user.orders', compact('orders'));
    }
    // Hiển thị chi tiết đơn hàng
    public function show($id)
    {
        $order = HoaDon::with('ChiTietHoaDon.Sach')->findOrFail($id);
        return view('Layouts.user.order_detail', compact('order'));
        // $order = HoaDon::findOrFail($id);
        // $details = ChiTietHoaDon::findOrFail($id);
        // return view('Layouts.user.order_detail', compact('order', 'details'));
    }
    // Hủy đơn hàng (thay đổi trạng thái)
    public function huyDonHang($id)
    {
        $order = HoaDon::findOrFail($id);
        if ($order->TrangThai == 'Hoàn thành') {
            return redirect()->route('user.orders.index')->with('error', 'Đơn hàng đã hoàn thành, không thể hủy');
        }
        $order->TrangThai = 'Hủy đơn';
        $order->save();

        return redirect()->route('user.orders.index');
    }
}
