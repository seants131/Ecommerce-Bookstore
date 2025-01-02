<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Đơn Hàng</title>
</head>
<body>

<h1>Cập Nhật Đơn Hàng</h1>

<form action="{{ route('orders.update', $order->MaHoaDon) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="MaKhachHang">Mã Khách Hàng:</label>
    <input type="text" name="MaKhachHang" value="{{ $order->MaKhachHang }}" required><br>
    
    <label for="NgayLap">Ngày Lập:</label>
    <input type="datetime-local" name="NgayLap" value="{{ $order->NgayLap }}" required><br>
    
    <label for="PhanTramThue">Phần Trăm Thuế:</label>
    <input type="number" name="PhanTramThue" value="{{ $order->PhanTramThue }}" required><br>
    
    <label for="TongTien">Tổng Tiền:</label>
    <input type="number" name="TongTien" value="{{ $order->TongTien }}" required><br>
    
    <label for="TrangThai">Trạng Thái:</label>
    <input type="text" name="TrangThai" value="{{ $order->TrangThai }}" required><br>
    
    <label for="PT_ThanhToan">Phương Thức Thanh Toán:</label>
    <input type="text" name="PT_ThanhToan" value="{{ $order->PT_ThanhToan }}" required><br>
    
    <label for="diachi">Địa Chỉ:</label>
    <textarea name="diachi">{{ $order->diachi }}</textarea><br>
    
    <button type="submit">Cập Nhật</button>
</form>

</body>
</html>
