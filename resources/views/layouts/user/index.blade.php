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
                                                <h4><a class="btn"
                                                        href="{{ url('/chitietsp/' . $SPBanChay->slug) }}">Xem</a>
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
            @foreach ($sach as $sp)
                <li class="span3">
                    <div class="thumbnail">
                        <a href="{{ url(path: '/chitietsp/' . $sp->slug) }}">
                            <img src="{{ asset('uploads/books/' . $sp->HinhAnh) }}" alt=""
                                style="width: 260px; height: 260px; object-fit: cover; " />
                        </a>
                        <div class="caption">
                            <h5 class="product_name">{{ $sp->TenSach }}</h5>
                            <p>
                                {{ $sp->LuotMua }} Lượt mua
                            </p>
                            <h4 style="text-align:center">
                                <a class="btn" href="{{ url(path: '/chitietsp/' . $sp->slug) }}">Xem chi tiết</a>
                                <a class="btn btn-primary" href="#">{{ round($sp->GiaBan) }} VND</a>
                            </h4>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="pagination" style="position: relative; top: -40px">
            {{ $sach->links('pagination::bootstrap-4') }}
        </div>
        <div style="display: flex; justify-content: space-between; width: 1200px; position: relative; left: -300px;">
            @foreach ($categoriesWithBooks as $danhmuc)
                <div class="category" style="min-width: 0px; max-width: 300px">
                    <h2 class="category-title manga">{{ $danhmuc->name }}</h2>
                    <div class="featured-article">
                        <div class="featured-content">
                            @foreach ($danhmuc->books as $book)
                                <div style="display: flex;justify-content: flex-start; margin-bottom: 20px;">
                                    <a href="{{ url(path: '/chitietsp/' . $book->slug) }}" style="width: 130px">
                                        <img src="{{ asset('uploads/books/' . $book->HinhAnh) }}" alt=""
                                            style="width: 100px; height: 100px; object-fit: cover;" />
                                    </a>
                                    <div>
                                        <p style="max-width: 130px; font-weight: bold;">{{ $book->TenSach }}</p>
                                        <p>{{ $book->LuotMua }} Lượt mua</p>
                                        <p>{{ round($book->GiaBan) }} VND</p>
                                        <a class="btn" href="{{ url(path: '/chitietsp/' . $book->slug) }}">Xem chi
                                            tiết</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
