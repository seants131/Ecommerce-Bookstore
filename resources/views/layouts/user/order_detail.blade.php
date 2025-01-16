{{-- @extends('layouts.user.UserLayout')

@section('content')
    <h1>Chi Tiết Đơn Hàng</h1>
    <div class="order-detail">
        <h2>Thông tin đơn hàng</h2>
        <p><strong>Mã Hóa Đơn:</strong> {{ $order->MaHoaDon }}</p>
        <p><strong>Ngày Lập:</strong> {{ $order->NgayLap }}</p>
        <p><strong>Tổng Tiền:</strong> {{ $order->TongTien }}</p>
        <p><strong>Trạng Thái:</strong> {{ $order->TrangThai }}</p>

        <h2>Chi Tiết Sản Phẩm</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Sách</th>
                    <th>Tên Sách</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Tổng Tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($details as $chiTiet)
                    <tr>
                        <td>{{ $chiTiet->MaSach }}</td>
                        <td>{{ $chiTiet->sach->TenSach }}</td>
                        <td>{{ $chiTiet->SoLuong }}</td>
                        <td>{{ $chiTiet->DonGia }}</td>
                        <td>{{ $chiTiet->TongTien }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}
@extends('layouts.user.UserLayout')

@section('content')
    <h1>Chi Tiết Đơn Hàng</h1>
    <div class="order-detail">
        <h2>Thông tin đơn hàng</h2>
        <p><strong>Mã Hóa Đơn:</strong> {{ $order->MaHoaDon }}</p>
        <p><strong>Ngày Lập:</strong> {{ $order->NgayLap }}</p>
        <p><strong>Tổng Tiền:</strong> {{ $order->TongTien }}</p>
        <p><strong>Trạng Thái:</strong> {{ $order->TrangThai }}</p>

        <h2>Chi Tiết Sản Phẩm</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Sách</th>
                    <th>Tên Sách</th>
                    <th>Hình ảảnh </th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Tổng Tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->chiTietHoaDon as $chiTiet)
                    <tr>
                        <td>{{ $chiTiet->MaSach }}</td>
                        <td>{{ $chiTiet->sach->TenSach }}</td>
                        <td>
                            @if ($chiTiet->sach->HinhAnh)
                                <img src="{{ asset('uploads/books/' . $chiTiet->sach->HinhAnh) }}" alt="Hình ảnh" width="100">
                            @else
                                <span>Không có</span>
                            @endif
                        </td>
                        <td>{{ $chiTiet->SoLuong }}</td>
                        <td>{{ $chiTiet->DonGia }}</td>
                        <td>{{ $chiTiet->TongTien }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
