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
    <!-- Bootstrap style responsive -->
    <link href="{{ asset('themes/css/bootstrap-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="{{ asset('themes/js/google-code-prettify/prettify.css') }}" rel="stylesheet" />
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset('themes/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('themes/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('themes/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('themes/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('themes/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <style type="text/css" id="enject"></style>
    <link href="{{ asset('themes/css/style.css') }}" rel="stylesheet" />

</head>

<body>
    <div id="header">
        <div class="container-fluid">
            <div id="logoArea" class="navbar">
                <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-inner d-flex justify-content-center align-items-center">
                    <a class="brand" href="index.html"><img src="https://placehold.co/80x80" alt="Bootsshop" /></a>
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
                            <div id="login" class="modal hide fade in" tabindex="-1" role="dialog"
                                aria-labelledby="login" aria-hidden="false">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                    <h3>Login Block</h3>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal loginFrm">
                                        <div class="control-group">
                                            <input type="text" id="inputEmail" placeholder="Email">
                                        </div>
                                        <div class="control-group">
                                            <input type="password" id="inputPassword" placeholder="Password">
                                        </div>
                                        <div class="control-group">
                                            <label class="checkbox">
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </form>
                                    <button type="submit" class="btn btn-success">Sign in</button>
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <div id="footerSection">
        <div class="container">
            <div class="row">
                <!-- Logo của Website -->
                <div class="span12 text-center">
                    <img src="{{ asset('themes/images/logo.png') }}" alt="Logo Website Bán Sách" style="width: 150px; height: auto; margin-bottom: 20px;">

                </div>
            </div>
            <div class="row">
                <!-- Menu dọc -->
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
                <!-- Thông tin về tài khoản -->
                <div class="span3">
                    <h5>QUẢN LÝ TÀI KHOẢN</h5>
                    <a href="login.html">Tài khoản của bạn</a>
                    <a href="login.html">Thông tin cá nhân</a>
                    <a href="login.html">Địa chỉ</a>
                    <a href="login.html">Ưu đãi</a>
                    <a href="login.html">Lịch sử đơn hàng</a>
                </div>
                <!-- Thông tin chung -->
                <div class="span3">
                    <h5>THÔNG TIN</h5>
                   <a href="{{ url('/contact') }}">Liên hệ</a>
                    <a href="register.html">Đăng ký</a>
                    <a href="legal_notice.html">Thông báo pháp lý</a>
                    <a href="tac.html">Điều khoản sử dụng</a>
                    <a href="faq.html">Câu hỏi thường gặp</a>
                </div>
                <!-- Các ưu đãi -->
                <div class="span3">
                    <h5>ƯU ĐÃI CỦA CHÚNG TÔI</h5>
                    <a href="#">Sách mới</a>
                    <a href="#">Sách bán chạy</a>
                    <a href="special_offer.html">Ưu đãi đặc biệt</a>
                    <a href="#">Nhà xuất bản</a>
                    <a href="#">Nhà cung cấp</a>
                </div>
                <!-- Mạng xã hội -->
                <div id="socialMedia" class="span3 pull-right">
                    <h5>KẾT NỐI VỚI CHÚNG TÔI</h5>
                    <a href="https://www.facebook.com/"><img width="40" height="40" src="{{ asset('themes/images/facebook.png') }}" title="Facebook" alt="Facebook" /></a>
                    <a href="https://www.twitter.com/"><img width="40" height="40" src="{{ asset('themes/images/twitter.png') }}" title="Twitter" alt="Twitter" /></a>
                    <a href="https://www.youtube.com/"><img width="40" height="40" src="{{ asset('themes/images/youtube.png') }}" title="YouTube" alt="YouTube" /></a>

                </div>
            </div>
            <!-- Thông tin địa chỉ và bản quyền -->
            <div class="row">
                <div class="span12 text-center">
                    <p>
                        <strong>Website Bán Sách - Địa chỉ: localhost</strong><br />
                        Mang đến những cuốn sách tuyệt vời để nâng cao tri thức và giải trí.
                    </p>
                    <p class="pull-right">&copy; 2024 Website Bán Sách</p>
                </div>
            </div>
        </div><!-- Container End -->
    </div>
    <script src="themes/js/jquery.js" type="text/javascript"></script>
    <script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="themes/js/google-code-prettify/prettify.js"></script>

    <script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>

</body>

</html>
