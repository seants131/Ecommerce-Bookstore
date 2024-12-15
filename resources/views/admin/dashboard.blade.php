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
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Mã Hóa Đơn</th>
          <th>Tên Sách</th>
          <th>Tên người dùng</th>
          <th>Thời gian mua</th>
          <th>Phương thức thanh toán</th>
          <th>Phương thức vận chuyển</th>
          <th>Tổng tiền</th>
          <th>Trạng thái</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>HD001</td>
          <td>Sách 1</td>
          <td>Người dùng 1</td>
          <td>25/11/2024 12:00</td>
          <td>Tiền mặt</td>
          <td>Shopee Express</td>
          <td>100.000 VND</td>
          <td>Hoàn thành</td>
          <td><i class="fas fa-edit"></i><i class="fas fa-trash"></i></td>
        </tr>
        <!-- Thêm các dòng khác nếu cần -->
      </tbody>
    </table>
  </div>
@endsection