@extends('layouts.user.layout')

@section('content')
    <div style="display: flex; justify-content: center">
        <div class="span9">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a> <span class="divider">/</span></li>
                <li><a href="{{ url('/product') }}">Sản phẩm</a> <span class="divider">/</span></li>
                <li class="active">
                @isset($chitietsp)
                    {{ $chitietsp->TenSach }}
                @else
                    Sản phẩm không tồn tại
                @endisset</li>
            </ul>
            <div class="row">
                <div id="gallery" class="span3">
                    @if(isset($chitietsp) && $chitietsp != null)
                    <a href="{{ asset('uploads/books/' . $chitietsp->HinhAnh) }}" title="{{ $chitietsp->TenSach }}">
                        <img src="{{ asset('uploads/books/' . $chitietsp->HinhAnh) }}" style="width:100%" alt="{{ $chitietsp->TenSach }}" />
                    </a>
                @else
                <h3>{{ isset($chitietsp) ? $chitietsp->TenSach : 'Sản phẩm không tồn tại' }}</h3>

                @endif
                    
                    </a>
                    <div id="differentview" class="moreOptopm carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                            </div>
                            <div class="item">
                            </div>
                        </div>
                    </div>

                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <span class="btn"><i class="icon-envelope"></i></span>
                            <span class="btn"><i class="icon-print"></i></span>
                            <span class="btn"><i class="icon-zoom-in"></i></span>
                            <span class="btn"><i class="icon-star"></i></span>
                            <span class="btn"><i class=" icon-thumbs-up"></i></span>
                            <span class="btn"><i class="icon-thumbs-down"></i></span>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <h3>{{ $chitietsp->TenSach }}</h3>
                    <hr class="soft" />
                    <form class="form-horizontal qtyFrm" action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        
                        <input type="hidden" name="product_id" value="{{ $chitietsp->MaSach }}"> <!-- id -->
                        <input type="hidden" name="price" value="{{ $chitietsp->GiaBan }}">
                        <div class="control-group">
                            <div class="controls">
                                <div style="display: flex; align-items: center; justify-content: space-between; width: 150px">
                                    <b>Số lượng</b>
                                    <input type="number" class="span1" name="quantity" placeholder="Qty." value="1" min="1" />
                                </div>
                    
                                <button type="submit" class="btn btn-large btn-primary pull-right">Thêm vào giỏ hàng <i
                                        class="icon-shopping-cart"></i></button>
                            </div>
                        </div>
                    </form>
                    
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    <hr class="soft" />
                    <h4 id="product-quantity">Còn: {{ $chitietsp->SoLuong }} quyển</h4>
                    <script>
                        function updateProductQuantity() {
                            var ProductSlug = '{{ $chitietsp->slug }}'; 
                            $.ajax({
                                url: '/chitietsp/' + ProductSlug + '/soluong',  
                                type: 'GET',
                                success: function(response) {
                                    if (response.SoLuong !== undefined) 
                                        $('#product-quantity').text('Còn: ' + response.SoLuong + ' quyển');  
                                    } else {
                                        alert('Không lấy được số lượng sản phẩm');
                                    }
                                },
                                error: function() {
                                    alert('Có lỗi xảy ra khi lấy số lượng');
                                }
                            });
                        }
                    
                        // Gọi hàm mỗi 5 giây để cập nhật số lượng
                        setInterval(updateProductQuantity, 5000);
                    </script>
                    
                    
                    <hr class="soft clr" />
                    @php
                        $text = $chitietsp->MoTa; // Lấy nội dung từ cơ sở dữ liệu
                        $sentences = explode('. ', $text); // Tách thành mảng câu
                    @endphp
                    @foreach ($sentences as $sentence)
                        <p>{{ trim($sentence) }}</p>
                    @endforeach
                    <hr class="soft" />
                </div>

                <div class="span9">
                    <ul id="productDetail" class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Thông tin chi tiết</a></li>
                        <li><a href="#profile" data-toggle="tab">Sản phẩm liên quan</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="techSpecRow">
                                        <td class="techSpecTD1">Mã hàng </td>
                                        <td class="techSpecTD2">{{ $chitietsp->MaSach }}</td>
                                    </tr>
                                    <tr class="techSpecRow">
                                        <td class="techSpecTD1">Năm xuất bản</td>
                                        <td class="techSpecTD2">{{ $chitietsp->NamXuatBan }}</td>
                                    </tr>
                                    <tr class="techSpecRow">
                                        <td class="techSpecTD1">Thể loại</td>
                                        <td class="techSpecTD2">{{ $theloaisach->danhmuc->name }}</td>
                                    </tr>
                                    <tr class="techSpecRow">
                                        <td class="techSpecTD1">Trạng thái</td>
                                        <td class="techSpecTD2">
                                            {{ $chitietsp->TrangThai == 1 ? 'Còn bán' : 'Đã ngừng bán' }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="tab-content">
                                <div class="tab-pane active" id="blockView">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="themes/images/products/10.jpg"
                                                        alt="" /></a>
                                                <div class="caption">
                                                    <h5>Manicure &amp; Pedicure</h5>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text.
                                                    </p>
                                                    <h4 style="text-align:center"><a class="btn"
                                                            href="product_details.html"> <i class="icon-zoom-in"></i></a>
                                                        <a class="btn" href="#">Add to <i
                                                                class="icon-shopping-cart"></i></a> <a
                                                            class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="themes/images/products/11.jpg"
                                                        alt="" /></a>
                                                <div class="caption">
                                                    <h5>Manicure &amp; Pedicure</h5>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text.
                                                    </p>
                                                    <h4 style="text-align:center"><a class="btn"
                                                            href="product_details.html"> <i class="icon-zoom-in"></i></a>
                                                        <a class="btn" href="#">Add to <i
                                                                class="icon-shopping-cart"></i></a> <a
                                                            class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="themes/images/products/12.jpg"
                                                        alt="" /></a>
                                                <div class="caption">
                                                    <h5>Manicure &amp; Pedicure</h5>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text.
                                                    </p>
                                                    <h4 style="text-align:center"><a class="btn"
                                                            href="product_details.html"> <i class="icon-zoom-in"></i></a>
                                                        <a class="btn" href="#">Add to <i
                                                                class="icon-shopping-cart"></i></a> <a
                                                            class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="themes/images/products/13.jpg"
                                                        alt="" /></a>
                                                <div class="caption">
                                                    <h5>Manicure &amp; Pedicure</h5>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text.
                                                    </p>
                                                    <h4 style="text-align:center"><a class="btn"
                                                            href="product_details.html"> <i class="icon-zoom-in"></i></a>
                                                        <a class="btn" href="#">Add to <i
                                                                class="icon-shopping-cart"></i></a> <a
                                                            class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="themes/images/products/1.jpg"
                                                        alt="" /></a>
                                                <div class="caption">
                                                    <h5>Manicure &amp; Pedicure</h5>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text.
                                                    </p>
                                                    <h4 style="text-align:center"><a class="btn"
                                                            href="product_details.html"> <i class="icon-zoom-in"></i></a>
                                                        <a class="btn" href="#">Add to <i
                                                                class="icon-shopping-cart"></i></a> <a
                                                            class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="themes/images/products/2.jpg"
                                                        alt="" /></a>
                                                <div class="caption">
                                                    <h5>Manicure &amp; Pedicure</h5>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text.
                                                    </p>
                                                    <h4 style="text-align:center"><a class="btn"
                                                            href="product_details.html"> <i class="icon-zoom-in"></i></a>
                                                        <a class="btn" href="#">Add to <i
                                                                class="icon-shopping-cart"></i></a> <a
                                                            class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr class="soft" />
                                </div>
                            </div>
                            <br class="clr">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
