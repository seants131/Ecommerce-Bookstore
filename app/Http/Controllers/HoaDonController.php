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
            // 'PhanTramThue' => $request->input('PhanTramThue'),
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
        $order = HoaDon::findOrFail($id); // Tìm đơn hàng theo ID

        try {
            // Thử xóa đơn hàng
            $order->delete();
            return redirect()->route('admin.orders.index')->with('success', 'Đơn hàng đã được xoá thành công.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Bắt lỗi ràng buộc khóa ngoại
            if ($e->getCode() === "23000") {
                return redirect()->route('admin.orders.index')->with(
                    'error',
                    'Không thể xóa đơn hàng này vì có chi tiết đơn hàng liên quan. Hãy kiểm tra và xóa các chi tiết trước.'
                );
            }

            // Xử lý lỗi khác
            return redirect()->route('admin.orders.index')->with(
                'error',
                'Đã xảy ra lỗi khi xóa đơn hàng. Vui lòng thử lại sau.'
            );
        }
    }
}
