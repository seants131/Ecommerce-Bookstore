<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Đơn Hàng</title>
</head>
<body>

<h1>Danh Sách Đơn Hàng</h1>
<table border="1">
    <thead>
        <tr>
            <th>MaHoaDon</th>
            <th>MaKhachHang</th>
            <th>NgayLap</th>
            <th>PhanTramThue</th>
            <th>TongTien</th>
            <th>TrangThai</th>
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
                <a href="{{ route('orders.edit', $order->MaHoaDon) }}">Cập Nhật</a> | 
                <form action="{{ route('orders.destroy', $order->MaHoaDon) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
