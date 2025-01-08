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
    <div style="margin-left: 200px">
        <!-- Sidebar -->
        <div class="sidebar">
            <img alt="Logo" height="50"
                src="https://storage.googleapis.com/a1aa/image/yy48DwMpQKrgIJeo3EYrKGqDysDOSHFfD7fWyuz4r8UidAunA.jpg"
                width="100" />
            <a href="{{ route('admin.dashboard') }}">
                <i class="fas fa-home"></i> Trang chủ
            </a>
            <a href="{{ route('admin.danhmucs.index') }}">
                <i class="fas fa-list"></i> Danh mục
            </a>
            <a href="{{ route('admin.books.index') }}">
                <i class="fas fa-book"></i> Sách
            </a>
            <a href="#">
                <i class="fas fa-user"></i> Người dùng
            </a>
            <a href="{{ route('admin.orders.index') }}">
                <i class="fa fa-check"></i> Đơn hàng
            </a>
            <a href="#">
                <i class="fas fa-sign-out-alt"></i> Đăng xuất
            </a>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <div class="left">
                    <img alt="Admin" height="50"
                        src="https://storage.googleapis.com/a1aa/image/8RihQ3eduvT1ESU0VpKIetK0ebQ0VlXcLSuvM8Njyo8kdAunA.jpg"
                        width="50" />
                    <span>Admin</span>
                </div>
                <div class="right">
                    <i class="fas fa-envelope"></i>
                    <i class="fas fa-bell"></i>
                    <i class="fas fa-user"></i>
                    <span class="username">Username</span>
                </div>
            </div>

            <!-- Content will be injected here -->
            @yield('content')
        </div>
    </div>
</body>
<script>
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green", "blue", "orange", "brown"];

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "World Wine Production 2018"
            }
        }
    });

    var xValues1 = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues1 = [55, 49, 44, 24, 15];
    var barColors1 = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145"
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

    const xValues2 = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    const yValues2 = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

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
                        min: 6,
                        max: 16
                    }
                }],
            }
        }
    });
</script>

</html>
