@extends('layouts.admin')  <!-- Kế thừa layout -->

@section('content')
  <div class="stats">
    <div class="stat">Doanh thu</div>
    <div class="stat">Tổng số đơn hàng</div>
    <div class="stat">Tổng số người dùng</div>
    <div class="stat">Tỷ lệ chuyển đổi</div>
  </div>
  
  <div class="charts">
    <div class="chart">
      Hiệu suất<br/>Chart
    </div>
    <div class="chart">
      Thể loại phổ biến<br/>Chart
    </div>
  </div>

  <div class="order-info">
    <h2>Thông tin đơn hàng</h2>
    <div class="order-info">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã Hóa Đơn</th>
                <th>Mã Khách Hàng</th>
                <th>Ngày Lập</th>
                <!-- <th>Phần Trăm Thuế</th> -->
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
                <!-- <td>{{ $order->PhanTramThue }}</td> -->
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
  </div>
@endsection