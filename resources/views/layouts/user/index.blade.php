@extends('layouts.user.layout')

@section('content')
    <div class="span9">
        <div class="well well-small">
            <h4>Sản phẩm bán chạy</h4>
            <div class="row-fluid">
                <div id="featured" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                @foreach ($topSP as $SPBanChay)
                                    <li class="span3">
                                        <div class="thumbnail feature-product">
                                            <i class="tag"></i>
                                            <a href="{{ route('chitietsp.index', $SPBanChay->slug) }}">
                                                <img src="{{ asset('uploads/books/' . $SPBanChay->HinhAnh) }}"
                                                    alt=""></a>
                                            <div class="caption">
                                                <h5>{{ $SPBanChay->TenSach }}</h5>
                                                <p>{{ $SPBanChay->LuotMua }} Lượt mua</p>
                                                <h4><a class="btn" href="{{ url('/chitietsp/'.$SPBanChay->slug) }}">Xem</a>
                                                    <span class="pull-right">{{ round($SPBanChay->GiaBan) }} VND</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4>Sản phẩm mới</h4>
        <ul class="thumbnails">
            <li class="span3">
                <div class="thumbnail">
                    <a href="{{ url('/chitiet') }}">
                        <img src="themes/images/products/1.jpg" alt="" />
                    </a>
                    <div class="caption">
                        <h5 class="product_name">Con đường chẳng mấy ai đi</h5>
                        <p>
                            M. Scott Peck
                        </p>
                        <h4 style="text-align:center">
                            <a class="btn" href="{{ url('/chitiet') }}">
                                <i class="icon-zoom-in"></i>
                            </a>
                            <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a>
                            <a class="btn btn-primary" href="#">100.000 VND</a>
                        </h4>
                    </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <a href="{{ url('/chitiet') }}">
                        <img src="themes/images/products/2.jpg" alt="" />
                    </a>
                    <div class="caption">
                        <h5 class="product_name">Thay đổi tí hon, hiệu quả bất ngờ</h5>
                        <p>
                            James Clear
                        </p>
                        <h4 style="text-align:center">
                            <a class="btn" href="{{ url('/chitiet') }}">
                                <i class="icon-zoom-in"></i>
                            </a>
                            <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a>
                            <a class="btn btn-primary" href="#">90.000 VND</a>
                        </h4>
                    </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <a href="{{ url('/chitiet') }}">
                        <img src="themes/images/products/3.jpg" alt="" />
                    </a>
                    <div class="caption">
                        <h5 class="product_name">Manifest</h5>
                        <p>
                            Hoa Học Trò
                        </p>
                        <h4 style="text-align:center">
                            <a class="btn" href="{{ url('/chitiet') }}">
                                <i class="icon-zoom-in"></i>
                            </a>
                            <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a>
                            <a class="btn btn-primary" href="#">120.000 VND</a>
                        </h4>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="thumbnails">
            <li class="span3">
                <div class="thumbnail">
                    <a href="{{ url('/chitiet') }}">
                        <img src="themes/images/products/4.jpg" alt="" />
                    </a>
                    <div class="caption">
                        <h5 class="product_name">Attack on titan</h5>
                        <p>
                            Hajime Isayama
                        </p>
                        <h4 style="text-align:center">
                            <a class="btn" href="{{ url('/chitiet') }}">
                                <i class="icon-zoom-in"></i>
                            </a>
                            <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a>
                            <a class="btn btn-primary" href="#">80.000 VND</a>
                        </h4>
                    </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <a href="{{ url('/chitiet') }}">
                        <img src="themes/images/products/5.jpg" alt="" />
                    </a>
                    <div class="caption">
                        <h5 class="product_name">Spy x Family</h5>
                        <p>
                            Tatsuya Endo
                        </p>
                        <h4 style="text-align:center">
                            <a class="btn" href="{{ url('/chitiet') }}">
                                <i class="icon-zoom-in"></i>
                            </a>
                            <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a>
                            <a class="btn btn-primary" href="#">70.000 VND</a>
                        </h4>
                    </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <a href="{{ url('/chitiet') }}">
                        <img src="themes/images/products/6.jpg" alt="" />
                    </a>
                    <div class="caption">
                        <h5 class="product_name">Napoléon Bonaparte</h5>
                        <p>
                            Adam Zamoyski
                        </p>
                        <h4 style="text-align:center">
                            <a class="btn" href="{{ url('/chitiet') }}">
                                <i class="icon-zoom-in"></i>
                            </a>
                            <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a>
                            <a class="btn btn-primary" href="#">200.00 VND</a>
                        </h4>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection
