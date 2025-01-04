@extends('layouts.admin')

@section('content')

    <h1>Danh Sách Đơn Hàng</h1>
    <!-- <a href="#" class="btn btn-primary mb-3">Thêm Đơn Hàng</a> -->
    <div class="order-info">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã Hóa Đơn</th>
                <th>Mã Khách Hàng</th>
                <th>Ngày Lập</th>
                <th>Phần Trăm Thuế</th>
                <th>Tổng Tiền</th>
                <th>Trạng Thái</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->MaHoaDon }}</td>
                <td>{{ $order->MaKhachHang }}</td>
                <td>{{ $order->NgayLap }}</td>
                <td>{{ $order->PhanTramThue }}</td>
                <td>{{ $order->TongTien }}</td>
                <td>{{ $order->TrangThai }}</td>
                <td>
                    <a href="{{ route('admin.orders.edit', $order->MaHoaDon) }}" class="btn btn-warning">Cập Nhật</a>
                    <form action="{{ route('admin.orders.destroy', $order->MaHoaDon) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá?')">Xoá</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
