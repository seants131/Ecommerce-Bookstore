<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bootshop Online Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('themes/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('themes/images/ico/favicon.ico') }}">
</head>

<body>
    <!-- Header -->
    <div id="header" class="container-fluid">
        <div id="logoArea" class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html"><img src="https://placehold.co/80x80" alt="Bootsshop"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <form class="form-inline mx-auto">
                    <input class="form-control mr-2" type="text" placeholder="Search">
                    <select class="form-control mr-2">
                        <option>All</option>
                        <option>CLOTHES</option>
                        <option>FOOD AND BEVERAGES</option>
                        <option>HEALTH & BEAUTY</option>
                    </select>
                    <button class="btn btn-primary" type="submit">Go</button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/product') }}">Sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Giới thiệu</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Liên hệ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/cart') }}">Giỏ hàng</a></li>
                    <li class="nav-item">
                        <a href="#loginRegisterModal" class="btn btn-success" data-toggle="modal">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Login/Register Modal -->
    <div class="modal fade" id="loginRegisterModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#loginTab">Đăng nhập</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#registerTab">Đăng ký</a></li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body tab-content">
                    <div id="loginTab" class="tab-pane fade show active">
                        <h4>Đăng nhập</h4>
                        <form>
                            <input type="email" class="form-control mb-2" placeholder="Email/Số điện thoại">
                            <input type="password" class="form-control mb-2" placeholder="Mật khẩu">
                            <a href="{{ url('/forgot-password') }}" class="text-primary">Quên mật khẩu?</a>
                        </form>
                    </div>
                    <div id="registerTab" class="tab-pane fade">
                        <h4>Đăng ký</h4>
                        <form>
                            <input type="email" class="form-control mb-2" placeholder="Email/Số điện thoại">
                            <input type="password" class="form-control mb-2" placeholder="Mã xác nhận OTP">
                            <input type="password" class="form-control mb-2" placeholder="Mật khẩu">
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success">Submit</button>
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="footerSection" class="bg-light text-center py-4">
        <img src="{{ asset('themes/images/logo.png') }}" alt="Logo" style="width: 150px;">
        <p class="mt-3">Mang đến những cuốn sách tuyệt vời để nâng cao tri thức và giải trí.</p>
        <p>&copy; 2024 Website Bán Sách</p>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
