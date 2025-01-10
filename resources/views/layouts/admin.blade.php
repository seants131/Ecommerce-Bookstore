<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Dashboard</title>
    <!-- Liên kết đến file CSS của Laravel -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    {{-- Nếu layout của trang admin mất đi khúc 2 ở bên là do cái này --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    @yield('styles')
</head>

<body>
    <div class="header">
        <div class="left">
            <a href="{{ url('/') }}">
                <img alt="Logo" height="50" src="{{ asset('img/logo.jpg') }}" width="100" />
            </a>
            <span>Bookstore</span>
        </div>
        <div class="right">
            <i class="fas fa-envelope"></i>
            <i class="fas fa-bell"></i>
            <i class="fas fa-user"></i>
            <span class="username">Username</span>
        </div>
    </div>
    <div style="margin-left: 200px">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fas fa-home"></i> Trang chủ
            </a>
            <a href="{{ route('admin.danhmucs.index') }}">
                <i class="fas fa-list"></i> Danh mục
            </a>
            <a href="{{ route('admin.books.index') }}">
                <i class="fas fa-book"></i> Sách
            </a>
            <a href="{{ route('admin.lienhe.index') }}">
                <i class="fas fa-user"></i> Liên hệ
            </a>
            <a href="{{ route('admin.orders.index') }}">
                <i class="fa fa-check"></i> Đơn hàng
            </a>
            <a href={{ route('admin.danhgia.index') }}>
                <i class="far fa-list-alt"></i> Đánh giá
            </a>
            <a href="#">
                <i class="fas fa-sign-out-alt"></i> Đăng xuất
            </a>
        </div>
        <!-- Main Content -->
        <div class="main-content" style="margin-top: 72px;">
            <!-- Content will be injected here -->
            @yield('content')
        </div>
    </div>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var xValues = [];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = ["red", "green", "blue", "orange", "brown"]; 

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: ["Italy", "France", "Spain", "USA", "Germany"], 
                datasets: [{
                    backgroundColor: barColors, 
                    data: yValues 
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false, // Không giữ tỷ lệ mặc định
                plugins: {
                    legend: {
                        display: false // Ẩn phần legend
                    }
                }
            }
        });
    });


    var xValues1 = ["Manga", "Light novel", "Trinh thám", "Kinh tế"];
    var yValues1 = [25, 25, 25, 25];
    var barColors1 = [
        "red",
        "#00aba9",
        "orange",
        "blue"
    ];

    new Chart("myChart1", {
        type: "pie",
        data: {
            labels: xValues1,
            datasets: [{
                backgroundColor: barColors1,
                data: yValues1
            }]
        },
        options: {
            title: {
                display: 0,
            }
        }
    });

    const xValues2 = ['10/1', '11/1', '12/1', '13/1', '14/1', '15/1', '16/1', ];
    const yValues2 = [2, 3, 5, 7, 6, 9, 13, 18, 4, 9];

    new Chart("myChart2", {
        type: "line",
        data: {
            labels: xValues2,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues2
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 16,
                    }
                }],
            }
        }
    });
</script>

</html>
