@extends('layouts.admin') <!-- Kế thừa layout -->

@section('content')
    <div class="stats">
        <div class="stat" style="background-color: #eef4ff">
            <h3> {{ number_format($doanhthutrangweb, 0, ',', '.') }} VND</h3>
            <p>Doanh thu trang web</p>
        </div>
        <div class="stat" style="background-color: #ffd66b">
            <h3> {{ number_format($tongdonhang, 0, ',', '.') }} đơn hàng</h3>
            <p>Tổng số đơn hàng</p>
        </div>
        <div class="stat" style="background-color: #ff8f6b">
            <h3> {{ number_format($nguoidung, 0, ',', '.') }} người dùng</h3>
            <p>Tổng số người dùng</p>
        </div>
        <div class="stat" style="background-color: #605bff">
            <h3> {{ number_format($sach, 0, ',', '.') }} quyển</h3>
            <p>Số sách trong kho</p>
        </div>
    </div>
    <div style="width: 100%; padding-left: 20px; margin-bottom: 20px" class="thongtinweb">
        <h5>Thông tin trang web</h5>
        <table>
            <tr>
                <th>Tiêu đề</th>
                <td>{{ $ndweb->tieude }}</td>
                <th>Chức năng</th>
            </tr>
            <tr>
                @php
                    $text = $ndweb->noidung; // Lấy nội dung từ cơ sở dữ liệu
                    $sentences = explode('. ', $text); // Tách thành mảng câu
                @endphp
                <th>Nội dung</th>
                <td>
                    @foreach ($sentences as $sentence)
                        <p>{{ trim($sentence) }}.</p>
                    @endforeach
                </td>
                <th>
                    <form action="{{ route('post.edit', $ndweb->id) }}" method="POST">
                        @csrf 
                        @method('GET')
                        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    </form>
                    </th>
            </tr>
            <tr>
        </table>
    </div>


    <div class="dashboard">
        <!-- Web Traffic Card -->
        <div class="card">
            <div style="display: flex; justify-content: space-between;">
                <h3>Lượt truy cập trang web</h3>
                <select>
                    <option value="year">Ngày</option>
                    <option value="week">Tuần</option>
                    <option value="month">Tháng</option>
                </select>
            </div>
            <div style="display: flex; justify-content: center; height: 300px; align-items: center;">
                <canvas id="myChart2" style="width:100px;max-width:500px;"></canvas>
            </div>
        </div>

        <!-- Popular Categories Card -->
        <div class="card">
            <h3 style="text-align: left">Thể loại phổ biến</h3>
            <div style="display: flex; justify-content: center;">
                <canvas id="myChart1" style="width:100px;max-width:300px;"></canvas>
            </div>
        </div>


        <!-- Featured Products Card -->
        <div class="card">
            <h3>Sản phẩm nổi bật</h3>
            <div class="product-slider">
                <div style="display: flex;">
                    <button>&lt;</button>
                    <div><img src="{{ asset('bookimage/image1.jpg') }}" alt=""></div>
                    <button>&gt;</button>
                </div>
                <div class="product-name">Truyện Kiều</div>
            </div>
        </div>
    </div>
@endsection
