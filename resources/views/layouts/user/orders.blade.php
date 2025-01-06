@extends('layouts.user.UserLayout')
@section('content')

    <h1>Danh Sách Đơn Hàng Của Bạn</h1>
    <div class="order-info">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Hóa Đơn</th>
                    <th>Ngày Lập</th>
                    <th>Tổng Tiền</th>
                    <th>Trạng Thái</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->MaHoaDon }}</td>
                        <td>{{ $order->NgayLap }}</td>
                        <td>{{ $order->TongTien }}</td>
                        <td>{{ $order->TrangThai }}</td>
                        <td>
                            {{-- <a href="{{ route('user.orders.show', $order->MaHoaDon) }}" class="btn btn-info">Xem</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection