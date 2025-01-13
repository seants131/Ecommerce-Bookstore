@extends('layouts.user.UserLayout')
@section('content')
    <h1>Danh Sách Đơn Hàng Của Bạn</h1>
    <div class="order-info">
        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        <div>
            <label for="statusFilter">Lọc theo trạng thái:</label>
            <select id="statusFilter" onchange="OrderFiler()">
                <option value="all">Tất cả</option>
                <option value="Đang chờ">Đang chờ</option>
                <option value="đang giao hàng">Đang giao hàng</option>
                <option value="Hoàn thành">Đã nhận hàng</option>
                <option value="đã hủy">Đã hủy</option>
            </select>
        </div>

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
            <tbody id="orderTableBody">
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->MaHoaDon }}</td>
                        <td>{{ $order->NgayLap }}</td>
                        <td>{{ $order->TongTien }}</td>
                        <td class="order-status">{{ $order->TrangThai }}</td>
                        <td>
                            <a href="" class="btn btn-info">Xem chi tiết</a>
                            <form action="{{ route('user.orders.cancel', $order->MaHoaDon) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc muốn hủy đơn hàng này?')">Hủy đơn</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function OrderFiler() {
            var filter = document.getElementById("statusFilter").value;
            var rows = document.getElementById("orderTableBody").getElementsByTagName("tr");

            for (var i = 0; i < rows.length; i++) {
                var status = rows[i].getElementsByClassName("order-status")[0].innerText;
                if (filter === "all" || status === filter) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
    </script>
@endsection
