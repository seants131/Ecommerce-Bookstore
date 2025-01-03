<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    // Hiển thị danh sách đơn hàng
    public function index()
    {
        $orders = HoaDon::all();  // Lấy tất cả đơn hàng
        return view('admin.orders.index', compact('orders'));
    }

    // Hiển thị form cập nhật đơn hàng
    public function edit($id)
    {
        $order = HoaDon::findOrFail($id);  // Lấy đơn hàng theo ID
        return view('admin.orders.edit', compact('order'));
    }

    // Cập nhật đơn hàng
    public function updateOrder(Request $request, $id)
    {
        $order = HoaDon::findOrFail($id);  // Tìm đơn hàng theo ID

        // Cập nhật các thông tin đơn hàng
        $order->update([
            'MaKhachHang' => $request->input('MaKhachHang'),
            'NgayLap' => $request->input('NgayLap'),
            'PhanTramThue' => $request->input('PhanTramThue'),
            'TongTien' => $request->input('TongTien'),
            'TrangThai' => $request->input('TrangThai'),
            'PT_ThanhToan' => $request->input('PT_ThanhToan'),
            'diachi' => $request->input('diachi'),
        ]);

        return redirect()->route('admin.orders.index')->with('success', 'Đơn hàng đã được cập nhật.');
    }

    // Xoá đơn hàng
    public function deleteOrder($id)
    {
        $order = HoaDon::findOrFail($id);  // Tìm đơn hàng theo ID
        $order->delete();  // Xoá đơn hàng

        return redirect()->route('admin.orders.index')->with('success', 'Đơn hàng đã được xoá.');
    }
}
