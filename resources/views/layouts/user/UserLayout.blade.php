<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <title>Thông tin cá nhân</title>
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
                    <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
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
                            <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span
                                    class="btn btn-large btn-success">Login</span></a>
                                    <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#loginTab" data-toggle="tab">Đăng nhập</a></li>
            <li><a href="#registerTab" data-toggle="tab">Đăng ký</a></li>
        </ul>
    </div>
    <div class="modal-body">
        <div class="tab-content">
            <!-- Login Content -->
            <div id="loginTab" class="tab-pane fade in active">
                <h4>Đăng nhập</h4> <!-- Title for Login -->
    <form class="form-horizontal">
        <div class="form-group">
            <label for="loginEmail" >Số điện thoại/Email</label>
            <input type="email" id="loginEmail" placeholder="Nhập số điện thoại hoặc email" class="form-control">
        </div>
        <div class="form-group">
        <label for="loginPassword" style="display:block;margin-top:8px;">Mật khẩu</label>
            <input type="password" id="loginPassword" placeholder="Nhập mật khẩu" class="form-control">
        </div>
        <div class="form-group">
            <a href="{{ url('/forgot-password') }}" style="display:block; margin-top:8px; font-size:14px; color:#007bff; text-decoration:none;">Quên mật khẩu?</a>
        </div>
    </form>
</div>

            <!-- Register Content -->
            <div id="registerTab" class="tab-pane fade">
                <h4>Đăng ký</h4> <!-- Title for Register -->
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="registerEmail" style="display:block;margin-top:8px;">Số điện thoại/Email</label>
                        <div class="col-sm-9">
                            <input type="email" id="registerEmail" placeholder="Nhập số điện thoại hoặc email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="registerPassword" style="display:block;margin-top:8px;">Mã xác nhận OTP</label>
                        <div class="col-sm-9">
                            <input type="password" id="registerPassword" placeholder="6 ký tự" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword" style="display:block;margin-top:8px;">Mật khẩu</label>
                        <div class="col-sm-9">
                            <input type="password" id="confirmPassword" placeholder="Nhập mật khẩu" class="form-control">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-success">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
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
                            <a href="register.html"><img style="width:100%" src="themes/images/carousel/1.png"
                                    alt="special offers" /></a>
                            <div class="carousel-caption">
                                <h4>Second Thumbnail label</h4>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta
                                    gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <a href="register.html"><img style="width:100%" src="themes/images/carousel/2.png"
                                    alt="" /></a>
                            <div class="carousel-caption">
                                <h4>Second Thumbnail label</h4>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta
                                    gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <a href="register.html"><img src="themes/images/carousel/3.png" alt="" /></a>
                            <div class="carousel-caption">
                                <h4>Second Thumbnail label</h4>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta
                                    gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <a href="register.html"><img src="themes/images/carousel/4.png" alt="" /></a>
                            <div class="carousel-caption">
                                <h4>Second Thumbnail label</h4>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta
                                    gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <a href="register.html"><img src="themes/images/carousel/5.png" alt="" /></a>
                            <div class="carousel-caption">
                                <h4>Second Thumbnail label</h4>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta
                                    gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <a href="register.html"><img src="themes/images/carousel/6.png" alt="" /></a>
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
                        !Request::routeIs('baiviet.contentbaiviet'))
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
                    <a href="login.html">Tài khoản của bạn</a>
                    <a href="login.html">Thông tin cá nhân</a>
                    <a href="login.html">Địa chỉ</a>
                    <a href="login.html">Ưu đãi</a>
                    <a href="login.html">Lịch sử đơn hàng</a>
                </div>
                <div class="span3">
                    <h5>THÔNG TIN</h5>
                    <a href="{{ url('/contact') }}">Liên hệ</a>
                    <a href="register.html">Đăng ký</a>
                    <a href="legal_notice.html">Thông báo pháp lý</a>
                    <a href="tac.html">Điều khoản sử dụng</a>
                    <a href="faq.html">Câu hỏi thường gặp</a>
                </div>
                <div class="span3">
                    <h5>ƯU ĐÃI CỦA CHÚNG TÔI</h5>
                    <a href="#">Sách mới</a>
                    <a href="#">Sách bán chạy</a>
                    <a href="special_offer.html">Ưu đãi đặc biệt</a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
