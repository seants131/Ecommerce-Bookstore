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
    <h5 style="margin-left: 20px">Hiệu suất trang web</h1>
        <canvas id="myChart" style="width:100%;max-width:100%; height: 500px"></canvas>

        <div class="dashboard">
            <!-- Web Traffic Card -->
            <div class="card">
                <div style="display: flex; justify-content: space-between;">
                    <h3>Lượt truy cập trang web</h3>
                    <select>
                        <option value="week">Tuần</option>
                        <option value="month">Tháng</option>
                        <option value="year">Năm</option>
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
                    <button>&lt;</button>
                    <div>
                        <div class="product">Sản phẩm</div>
                        <div class="product-name">Sản phẩm A</div>
                    </div>
                    <button>&gt;</button>
                </div>
            </div>
        </div>
    @endsection
