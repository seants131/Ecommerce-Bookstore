<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutcontent.css') }}">
    <link id="callCss" rel="stylesheet" href="{{ asset('themes/bootshop/bootstrap.min.css') }}" media="screen" />
    <link href="{{ asset('themes/css/base.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('themes/css/bootstrap-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/js/google-code-prettify/prettify.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('themes/images/ico/favicon.ico') }}">
    <link href="{{ asset('themes/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <div id="header">
        <div class="container-fluid">
            <div id="logoArea" class="navbar">
                <div class="navbar-inner d-flex justify-content-center align-items-center">
                    <a class="brand" href="{{ url('/') }}"><img src="{{ asset('img/logo.jpg') }}" alt="Bootsshop"
                            style="width: 150px; height: 80px; object-fit: cover;" /></a>
                    <form class="form-inline navbar-search" method="post" action="">
                        <input id="srchFld" class="srchTxt" type="text" />
                        <select class="srchTxt">
                            <option>All</option>
                            <option>CLOTHES </option>
                            <option>FOOD AND BEVERAGES </option>
                            <option>HEALTH & BEAUTY </option>
                            <option>SPORTS & LEISURE </option>
                            <option>BOOKS & ENTERTAINMENTS </option>
                        </select>
                        <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
                    </form>
                    <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar"
                        style="display: none;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <ul id="topMenu" class="nav pull-right">
                        <li class=""><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li class=""><a href="{{ url('/product') }}">Sản phẩm</a></li>
                        <li class=""><a href="{{ url('/about') }}">Giới thiệu</a></li>
                        <li class=""><a href="{{ url('/contact') }}">Liên hệ</a></li>
                        <li class=""><a href="{{ url('/cart') }}">Giỏ hàng</a></li>
                        <li class=""><a href="{{ url('/user') }}">Người dùng</a></li>

                        <li class="">
                            <a href="#login" role="button" data-toggle="modal" style="padding-right:0">
                                <span class="btn btn-large btn-success">Login</span>
                            </a>
                            <div id="login" class="modal hide fade in" tabindex="-1" role="dialog"
                                aria-labelledby="login" aria-hidden="false">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">x</button>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#loginTab" data-toggle="tab">Đăng nhập</a></li>
                                        <li><a href="#registerTab" data-toggle="tab">Đăng ký</a></li>
                                    </ul>
                                </div>
                                <div class="modal-body">
                                    <div class="tab-content">
                                        <!-- Login Content -->
                                        <div id="loginTab" class="tab-pane fade in active">
                                            <h4>Đăng nhập</h4>
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="loginEmail">Số điện thoại/Email</label>
                                                    <input type="email" id="loginEmail"
                                                        placeholder="Nhập số điện thoại hoặc email"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="loginPassword"
                                                        style="display:block;margin-top:8px;">Mật khẩu</label>
                                                    <input type="password" id="loginPassword"
                                                        placeholder="Nhập mật khẩu" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <a href="{{ url('/forgot-password') }}"
                                                        style="display:block; margin-top:8px; font-size:14px; color:#007bff; text-decoration:none;">Quên
                                                        mật khẩu?</a>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Register Content -->
                                        <div id="registerTab" class="tab-pane fade">
                                            <h4>Đăng ký</h4>
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="registerEmail"
                                                        style="display:block;margin-top:8px;">Số điện
                                                        thoại/Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" id="registerEmail"
                                                            placeholder="Nhập số điện thoại hoặc email"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <button type="button" id="sendOtpButton"
                                                            class="btn btn-secondary">Gửi mã OTP</button>
                                                    </div>
                                                    <p id="otpMessage" class="text-success mt-2"
                                                        style="display: none;">Mã OTP đã được gửi!</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="otpCode" style="display:block;margin-top:8px;">Mã xác
                                                        nhận OTP</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="otpCode" placeholder="6 ký tự"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="registerPassword"
                                                        style="display:block;margin-top:8px;">Mật khẩu</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" id="registerPassword"
                                                            placeholder="Nhập mật khẩu" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="confirmPassword"
                                                        style="display:block;margin-top:8px;">Xác nhận mật khẩu</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" id="confirmPassword"
                                                            placeholder="Nhập lại mật khẩu" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success">Submit</button>
                                    <button type="button" class="btn btn-default"
                                        data-dismiss="modal">Close</button>
                                </div>

                                <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
                                <script>
                                    // Xử lý sự kiện gửi mã OTP
                                    document.getElementById('sendOtpButton').addEventListener('click', function() {
                                        const email = document.getElementById('registerEmail').value;

                                        if (!email) {
                                            alert('Vui lòng nhập số điện thoại hoặc email trước khi gửi mã OTP!');
                                            return;
                                        }

                                        // Gửi yêu cầu gửi mã OTP qua API
                                        axios.post('/send-otp', {
                                                email: email
                                            })
                                            .then(response => {
                                                if (response.data.success) {
                                                    document.getElementById('otpMessage').style.display = 'block';
                                                } else {
                                                    alert(response.data.message || 'Có lỗi xảy ra, vui lòng thử lại!');
                                                }
                                            })
                                            .catch(error => {
                                                alert('Có lỗi xảy ra, vui lòng kiểm tra lại email hoặc thử lại sau!');
                                            });
                                    });
                                </script>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
    @if (Request::is('/'))
        <div id="carouselBlk">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <a href="register.html"><img style="width:830px; height: 320px;"
                                    src="{{ asset('img/slide1.jpg') }}" alt="special offers" /></a>
                            <div class="carousel-caption">
                                <h4>Second Thumbnail label</h4>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta
                                    gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
    @endif

    <div id="mainBody">
        <div class="container">
            <div class="row">
                @if (
                    !Request::routeIs('contact.form') &&
                        !Request::routeIs('contact.store') &&
                        !Request::routeIs('baiviet.index') &&
                        !Request::routeIs('about.chinhsach') &&
                        !Request::routeIs('baiviet.noidungbaiviet') &&
                        !Request::routeIs('chitietsp.index'))

                    <div id="sidebar" class="span3">
                        <ul id="sideManu" class="nav nav-tabs nav-stacked">
                            @foreach ($danhmucs as $danhmuc)
                                <li class="subMenu">
                                    <a>{{ $danhmuc->name }} [{{ $danhmuc->books_count }}]</a>
                                    <ul style="display:none">
                                        @foreach ($danhmuc->children as $child)
                                            <li>
                                                <a href="products.html">
                                                    <i class="icon-chevron-right"></i>{{ $child->name }}
                                                    ({{ $child->books_count }})
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                        <br />
                        @foreach ($books as $book)
                        <div class="thumbnaili">
                            <div class="book-item">
                                <img src="{{ asset('uploads/books/' . $book->HinhAnh) }}" alt="{{ $book->TenSach }}" class="img-fluid" />
                                <div class="caption">
                                    <p>{{ Str::limit($book->MoTa, 30) }}</p>
                                    <h4 style="text-align:center">
                                        <a class="btn" href="{{ url('/chitiet/' . $book->id) }}">
                                            <i class="icon-zoom-in"></i>
                                        </a>
                                        <form action="{{ route('cart.add') }}" method="POST" style="display:inline;">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $book->MaSach }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="btn">Add to <i class="icon-shopping-cart"></i></button>
                                        </form>

                                        <a class="btn btn-primary" href="#">{{ number_format($book->GiaBan) }} VND</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <br />
                        <div class="thumbnail">
                            <img src="themes/images/payment_methods.png" title="Bootshop Payment Methods"
                                alt="Payments Methods">
                            <div class="caption">
                                <h5>Payment Methods</h5>
                            </div>
                        </div>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <div id="footerSection">
        <div class="container">
            <div class="row">
                <div class="span12 text-center">
                    <img src="{{ asset('img/logo.jpg') }}" alt="Logo Website Bán Sách"
                        style="width: 150px; height: 80px; object-fit: cover;">
                </div>
            </div>
            <div class="row">
                <div class="span3">
                    <h5>MENU</h5>
                    <div class="">
                        <a href="#" class="active">Trang chủ</a>
                        <a href="#">Sách mới</a>
                        <a href="#">Thể loại</a>
                        <a href="#">Khuyến mãi</a>
                        <a href="#">Liên hệ</a>
                    </div>
                </div>
                <div class="span3">
                    <h5>QUẢN LÝ TÀI KHOẢN</h5>
                    <a href="{{ url('/user') }}">Tài khoản của bạn</a>
                    <a href="{{ url('/user') }}">Thông tin cá nhân</a>
                    <a href="{{ url('/user') }}">Địa chỉ</a>
                    <a href="{{ url('/user') }}">Ưu đãi</a>
                    <a href="{{ url('/user') }}">Lịch sử đơn hàng</a>
                </div>
                <div class="span3">
                    <h5>THÔNG TIN</h5>
                    <a href="{{ url('/contact') }}">Liên hệ</a>
                    <a href="{{ url('/chinh-sach-bao-mat') }}">Chính sách bảo mật thông tin cá nhân</a>
                    <a href="{{ url('/chinh-sach-thanh-toan') }}">Chính sách bảo mật thanh toán</a>
                    <a href="{{ url('/chinh-sach-bao-hanh') }}">Chính sách bảo hành</a>
                    <a href="{{ url('/about/thong-tin-ve-phpcraft') }}">Về chúng tôi</a>
                </div>
                <div class="span3">
                    <h5>ƯU ĐÃI CỦA CHÚNG TÔI</h5>
                    <a href="#">Sách mới</a>
                    <a href="#">Sách bán chạy</a>
                    <a href="#">Ưu đãi đặc biệt</a>
                    <a href="#">Nhà xuất bản</a>
                    <a href="#">Nhà cung cấp</a>
                </div>
                <div id="socialMedia" class="span3 pull-right">
                    <h5>KẾT NỐI VỚI CHÚNG TÔI</h5>
                    <a href="https://www.facebook.com/"><img width="40" height="40"
                            src="{{ asset('themes/images/facebook.png') }}" title="Facebook" alt="Facebook" /></a>
                    <a href="https://www.twitter.com/"><img width="40" height="40"
                            src="{{ asset('themes/images/twitter.png') }}" title="Twitter" alt="Twitter" /></a>
                    <a href="https://www.youtube.com/"><img width="40" height="40"
                            src="{{ asset('themes/images/youtube.png') }}" title="YouTube" alt="YouTube" /></a>

                </div>
            </div>
            <div class="row">
                <div class="span12 text-center">
                    <p>
                        <strong>Website Bán Sách - Địa chỉ: localhost</strong><br />
                        Mang đến những cuốn sách tuyệt vời để nâng cao tri thức và giải trí.
                    </p>
                    <p class="pull-right">&copy; 2024 Website Bán Sách</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showForm(formId) {
            const forms = document.querySelectorAll('.form-container');
            const tabs = document.querySelectorAll('.tab button');

            forms.forEach(form => form.classList.remove('active'));
            tabs.forEach(tab => tab.classList.remove('active'));

            document.getElementById(formId).classList.add('active');
            if (formId === 'loginForm') {
                document.getElementById('loginTab').classList.add('active');
            } else {
                document.getElementById('registerTab').classList.add('active');
            }
        }
    </script>

    <script src="themes/js/jquery.js" type="text/javascript"></script>
    <script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="themes/js/google-code-prettify/prettify.js"></script>
    <script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const smallScreenButton = document.getElementById("smallScreen");
            const topMenu = document.getElementById("topMenu");

            // Lắng nghe sự kiện click trên nút nhỏ để toggle menu
            smallScreenButton.addEventListener("click", function() {
                if (topMenu.style.display === "block") {
                    topMenu.style.display = "none";
                } else {
                    topMenu.style.display = "block";
                }
            });

            // Lắng nghe sự kiện thay đổi kích thước màn hình
            window.addEventListener("resize", function() {
                const screenWidth = window.innerWidth;

                if (screenWidth > 1350) {
                    // Khi màn hình lớn, hiển thị topmenu và ẩn nút
                    topMenu.style.display = "flex";
                    smallScreenButton.style.display = "none";
                } else {
                    // Khi màn hình nhỏ, ẩn topmenu và hiển thị nút
                    topMenu.style.display = "none";
                    smallScreenButton.style.display = "block";
                }
            });

            // Thiết lập trạng thái ban đầu khi tải trang
            const initialScreenWidth = window.innerWidth;
            if (initialScreenWidth > 1350) {
                topMenu.style.display = "flex";
                smallScreenButton.style.display = "none";
            } else {
                topMenu.style.display = "none";
                smallScreenButton.style.display = "block";
            }
        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/678280abaf5bfec1dbea30f7/1ihasd7s6';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
