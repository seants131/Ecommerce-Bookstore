@extends('layouts.user.layout')

@section('content')
    <div style="display: flex; justify-content: center">
        <div class="span9">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a> <span class="divider">/</span></li>
                <li><a href="{{ url('/product') }}">Sản phẩm</a> <span class="divider">/</span></li>
                <li class="active">{{ $chitietsp->TenSach }}</li>
            </ul>
            <div class="row">
                <div id="gallery" class="span3">
                    <a href={{ asset('uploads/books/' . $chitietsp->HinhAnh) }} title="Con đường chẳng mấy ai đi">
                        <img src="{{ asset('uploads/books/' . $chitietsp->HinhAnh) }}" style="width:100%"
                            alt="Fujifilm FinePix S2950 Digital Camera" />
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
                    <small>M. Scott Peck</small>
                    <hr class="soft" />
                    <form class="form-horizontal qtyFrm" action="" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="1"> <!-- ID sản phẩm -->
                        <input type="hidden" name="price" value="222.00"> <!-- Giá sản phẩm -->
                        <div class="control-group">
                            <div class="controls">
                                <div
                                    style="display: flex; align-items: center; justify-content: space-between; width: 150px">
                                    <b>Số lượng</b>
                                    <input type="number" class="span1" name="quantity" placeholder="Qty." value="1"
                                        min="1" />
                                </div>

                                <button type="submit" class="btn btn-large btn-primary pull-right">Thêm vào giỏ hàng <i
                                        class="icon-shopping-cart"></i></button>
                            </div>
                        </div>
                    </form>
                    <hr class="soft" />
                    <h4>Còn: {{ $chitietsp->SoLuong }} quyển</h4>
                    <hr class="soft clr" />
                    @php
                        $text = $chitietsp->MoTa; // Lấy nội dung từ cơ sở dữ liệu
                        $sentences = explode('. ', $text); // Tách thành mảng câu
                    @endphp
                    @foreach ($sentences as $sentence)
                        <p>{{ trim($sentence) }}</p>
                    @endforeach
                    <a class="btn btn-small pull-right" href="#detail">Thông tin chi tiết</a>
                    <br class="clr" />
                    <a href="#" name="detail"></a>
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
                            <div id="myTab" class="pull-right">
                                <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i
                                            class="icon-list"></i></span></a>
                                <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i
                                            class="icon-th-large"></i></span></a>
                            </div>
                            <br class="clr" />
                            <hr class="soft" />
                            <div class="tab-content">
                                <div class="tab-pane" id="listView">
                                    <div class="row">
                                        <div class="span2">
                                            <img src="themes/images/products/4.jpg" alt="" />
                                        </div>
                                        <div class="span4">
                                            <h3>New | Available</h3>
                                            <hr class="soft" />
                                            <h5>Product Name </h5>
                                            <p>
                                                Nowadays the lingerie industry is one of the most successful
                                                business spheres.We always stay in touch with the latest fashion
                                                tendencies -
                                                that is why our goods are so popular..
                                            </p>
                                            <a class="btn btn-small pull-right" href="product_details.html">View
                                                Details</a>
                                            <br class="clr" />
                                        </div>
                                        <div class="span3 alignR">
                                            <form class="form-horizontal qtyFrm">
                                                <h3> $222.00</h3>
                                                <label class="checkbox">
                                                    <input type="checkbox"> Adds product to compair
                                                </label><br />
                                                <div class="btn-group">
                                                    <a href="product_details.html" class="btn btn-large btn-primary"> Add
                                                        to
                                                        <i class=" icon-shopping-cart"></i></a>
                                                    <a href="product_details.html" class="btn btn-large"><i
                                                            class="icon-zoom-in"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="soft" />
                                    <div class="row">
                                        <div class="span2">
                                            <img src="themes/images/products/5.jpg" alt="" />
                                        </div>
                                        <div class="span4">
                                            <h3>New | Available</h3>
                                            <hr class="soft" />
                                            <h5>Product Name </h5>
                                            <p>
                                                Nowadays the lingerie industry is one of the most successful
                                                business spheres.We always stay in touch with the latest fashion
                                                tendencies -
                                                that is why our goods are so popular..
                                            </p>
                                            <a class="btn btn-small pull-right" href="product_details.html">View
                                                Details</a>
                                            <br class="clr" />
                                        </div>
                                        <div class="span3 alignR">
                                            <form class="form-horizontal qtyFrm">
                                                <h3> $222.00</h3>
                                                <label class="checkbox">
                                                    <input type="checkbox"> Adds product to compair
                                                </label><br />
                                                <div class="btn-group">
                                                    <a href="product_details.html" class="btn btn-large btn-primary"> Add
                                                        to
                                                        <i class=" icon-shopping-cart"></i></a>
                                                    <a href="product_details.html" class="btn btn-large"><i
                                                            class="icon-zoom-in"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="soft" />
                                    <div class="row">
                                        <div class="span2">
                                            <img src="themes/images/products/6.jpg" alt="" />
                                        </div>
                                        <div class="span4">
                                            <h3>New | Available</h3>
                                            <hr class="soft" />
                                            <h5>Product Name </h5>
                                            <p>
                                                Nowadays the lingerie industry is one of the most successful
                                                business spheres.We always stay in touch with the latest fashion
                                                tendencies -
                                                that is why our goods are so popular..
                                            </p>
                                            <a class="btn btn-small pull-right" href="product_details.html">View
                                                Details</a>
                                            <br class="clr" />
                                        </div>
                                        <div class="span3 alignR">
                                            <form class="form-horizontal qtyFrm">
                                                <h3> $222.00</h3>
                                                <label class="checkbox">
                                                    <input type="checkbox"> Adds product to compair
                                                </label><br />
                                                <div class="btn-group">
                                                    <a href="product_details.html" class="btn btn-large btn-primary"> Add
                                                        to
                                                        <i class=" icon-shopping-cart"></i></a>
                                                    <a href="product_details.html" class="btn btn-large"><i
                                                            class="icon-zoom-in"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="soft" />
                                    <div class="row">
                                        <div class="span2">
                                            <img src="themes/images/products/7.jpg" alt="" />
                                        </div>
                                        <div class="span4">
                                            <h3>New | Available</h3>
                                            <hr class="soft" />
                                            <h5>Product Name </h5>
                                            <p>
                                                Nowadays the lingerie industry is one of the most successful
                                                business spheres.We always stay in touch with the latest fashion
                                                tendencies -
                                                that is why our goods are so popular..
                                            </p>
                                            <a class="btn btn-small pull-right" href="product_details.html">View
                                                Details</a>
                                            <br class="clr" />
                                        </div>
                                        <div class="span3 alignR">
                                            <form class="form-horizontal qtyFrm">
                                                <h3> $222.00</h3>
                                                <label class="checkbox">
                                                    <input type="checkbox"> Adds product to compair
                                                </label><br />
                                                <div class="btn-group">
                                                    <a href="product_details.html" class="btn btn-large btn-primary"> Add
                                                        to
                                                        <i class=" icon-shopping-cart"></i></a>
                                                    <a href="product_details.html" class="btn btn-large"><i
                                                            class="icon-zoom-in"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <hr class="soft" />
                                    <div class="row">
                                        <div class="span2">
                                            <img src="themes/images/products/8.jpg" alt="" />
                                        </div>
                                        <div class="span4">
                                            <h3>New | Available</h3>
                                            <hr class="soft" />
                                            <h5>Product Name </h5>
                                            <p>
                                                Nowadays the lingerie industry is one of the most successful
                                                business spheres.We always stay in touch with the latest fashion
                                                tendencies -
                                                that is why our goods are so popular..
                                            </p>
                                            <a class="btn btn-small pull-right" href="product_details.html">View
                                                Details</a>
                                            <br class="clr" />
                                        </div>
                                        <div class="span3 alignR">
                                            <form class="form-horizontal qtyFrm">
                                                <h3> $222.00</h3>
                                                <label class="checkbox">
                                                    <input type="checkbox"> Adds product to compair
                                                </label><br />
                                                <div class="btn-group">
                                                    <a href="product_details.html" class="btn btn-large btn-primary"> Add
                                                        to
                                                        <i class=" icon-shopping-cart"></i></a>
                                                    <a href="product_details.html" class="btn btn-large"><i
                                                            class="icon-zoom-in"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="soft" />
                                    <div class="row">
                                        <div class="span2">
                                            <img src="themes/images/products/9.jpg" alt="" />
                                        </div>
                                        <div class="span4">
                                            <h3>New | Available</h3>
                                            <hr class="soft" />
                                            <h5>Product Name </h5>
                                            <p>
                                                Nowadays the lingerie industry is one of the most successful
                                                business spheres.We always stay in touch with the latest fashion
                                                tendencies -
                                                that is why our goods are so popular..
                                            </p>
                                            <a class="btn btn-small pull-right" href="product_details.html">View
                                                Details</a>
                                            <br class="clr" />
                                        </div>
                                        <div class="span3 alignR">
                                            <form class="form-horizontal qtyFrm">
                                                <h3> $222.00</h3>
                                                <label class="checkbox">
                                                    <input type="checkbox"> Adds product to compair
                                                </label><br />
                                                <div class="btn-group">
                                                    <a href="product_details.html" class="btn btn-large btn-primary"> Add
                                                        to
                                                        <i class=" icon-shopping-cart"></i></a>
                                                    <a href="product_details.html" class="btn btn-large"><i
                                                            class="icon-zoom-in"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="soft" />
                                </div>
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
