@extends('layouts.admin')

@section('content')

    <h1>Cập Nhật Đơn Hàng</h1>
    <form action="{{ route('admin.orders.update', $order->MaHoaDon) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="MaKhachHang">Mã Khách Hàng:</label>
            <input type="text" name="MaKhachHang" class="form-control" value="{{ $order->MaKhachHang }}" required>
        </div>

        <div class="form-group">
            <label for="NgayLap">Ngày Lập:</label>
            <input type="datetime-local" name="NgayLap" class="form-control" value="{{ $order->NgayLap }}" required>
        </div>

        <div class="form-group">
            <label for="PhanTramThue">Phần Trăm Thuế:</label>
            <input type="number" name="PhanTramThue" class="form-control" value="{{ $order->PhanTramThue }}" required>
        </div>

        <div class="form-group">
            <label for="TongTien">Tổng Tiền:</label>
            <input type="number" name="TongTien" class="form-control" value="{{ $order->TongTien }}" required>
        </div>

        <div class="form-group">
            <label for="TrangThai">Trạng Thái:</label>
            <input type="text" name="TrangThai" class="form-control" value="{{ $order->TrangThai }}" required>
        </div>

        <div class="form-group">
            <label for="PT_ThanhToan">Phương Thức Thanh Toán:</label>
            <input type="text" name="PT_ThanhToan" class="form-control" value="{{ $order->PT_ThanhToan }}" required>
        </div>

        <div class="form-group">
            <label for="diachi">Địa Chỉ:</label>
            <textarea name="diachi" class="form-control">{{ $order->diachi }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>

@endsection
