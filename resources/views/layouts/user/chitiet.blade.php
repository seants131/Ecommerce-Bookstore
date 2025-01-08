@extends('layouts.user.layout')

@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="{{ url('/product') }}">Sản phẩm</a> <span class="divider">/</span></li>
            <li class="active">Chi tiết sản phẩm</li>
        </ul>
        <div class="row">
            <div id="gallery" class="span3">
                <a href="themes/images/products/1.jpg" title="Con đường chẳng mấy ai đi">
                    <img src="{{ asset('themes/images/products/1.jpg') }}" style="width:100%"
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
                <h3>Con đường chẳng mấy ai đi </h3>
                <small>M. Scott Peck</small>
                <hr class="soft" />
                <form class="form-horizontal qtyFrm" action="" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="1"> <!-- ID sản phẩm -->
                    <input type="hidden" name="price" value="222.00"> <!-- Giá sản phẩm -->
                    <div class="control-group">
                        <label class="control-label"><span>100.000 VND</span></label>
                        <div class="controls">
                            <div style="display: flex; align-items: center; justify-content: space-between; width: 150px">
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
                <h4>Kho: 100</h4>
                <hr class="soft clr" />
                <p>
                    Có lẽ không quyển sách nào trong thế kỷ này có tác động sâu sắc đến đời sống trí tuệ và tinh thần của
                    chúng ta hơn Con Đường Chẳng Mấy Ai Đi. Với doanh số trên 10 triệu bản in trên toàn thế giới và được
                    dịch sang hơn 25 ngôn ngữ, đây là một hiện tượng trong ngành xuất bản, với hơn mười năm nằm trong danh
                    sách Best-sellers của New York Times.
                </p>
                <p>
                    Với cách hành văn kinh điển và thông điệp đầy thấu hiểu, quyển sách Con Đường Chẳng Mấy Ai Đi giúp chúng
                    ta khám phá bản chất của các mối quan hệ và của một tinh thần trưởng thành. Quyển sách giúp chúng ta học
                    cách phân biệt sự lệ thuộc với tình yêu; làm thế nào để trở thành những bậc phụ huynh tinh tế và nhạy
                    cảm; và cuối cùng là làm thế nào để sống chân thật với chính mình.
                </p>
                <p>
                    Với dòng mở đầu bất hủ của quyển sách, "Cuộc đời này rất khó sống", thể hiện quan điểm hành trình phát
                    triển tinh thần là một chặng đường dài và gian nan, Tiến sĩ Peck thể hiện sự đồng cảm, nhẹ nhàng dẫn dắt
                    độc giả vượt qua quá trình khó khăn đó, để thay đổi hướng tới tầm mức thấu hiểu bản thân sâu sắc hơn.
                </p>
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
                                    <td class="techSpecTD2">9786044009674</td>
                                </tr>
                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Tên Nhà Cung Cấp</td>
                                    <td class="techSpecTD2">CÔNG TY CỔ PHẦN VĂN HOÁ & CÔNG NGHỆ TUỆ TRI</td>
                                </tr>
                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Tác giả</td>
                                    <td class="techSpecTD2"> M. Scott Peck</td>
                                </tr>
                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Nguòi dịch</td>
                                    <td class="techSpecTD2">Lê Đặng Cam Thảo
                                    </td>
                                </tr>
                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Nhà xuất bản</td>
                                    <td class="techSpecTD2">Dân Trí
                                    </td>
                                </tr>
                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Năm xuất bản</td>
                                    <td class="techSpecTD2">2024</td>
                                </tr>
                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Kích Thước</td>
                                    <td class="techSpecTD2">21 x 14.5 x 1.7 cm
                                    </td>
                                </tr>
                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Số trang</td>
                                    <td class="techSpecTD2">344</td>
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
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to
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
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to
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
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to
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
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to
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
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to
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
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to
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
                                                        href="product_details.html"> <i class="icon-zoom-in"></i></a> <a
                                                        class="btn" href="#">Add to <i
                                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                        href="#">&euro;222.00</a></h4>
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
                                                        href="product_details.html"> <i class="icon-zoom-in"></i></a> <a
                                                        class="btn" href="#">Add to <i
                                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                        href="#">&euro;222.00</a></h4>
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
                                                        href="product_details.html"> <i class="icon-zoom-in"></i></a> <a
                                                        class="btn" href="#">Add to <i
                                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                        href="#">&euro;222.00</a></h4>
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
                                                        href="product_details.html"> <i class="icon-zoom-in"></i></a> <a
                                                        class="btn" href="#">Add to <i
                                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                        href="#">&euro;222.00</a></h4>
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
                                                        href="product_details.html"> <i class="icon-zoom-in"></i></a> <a
                                                        class="btn" href="#">Add to <i
                                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                        href="#">&euro;222.00</a></h4>
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
                                                        href="product_details.html"> <i class="icon-zoom-in"></i></a> <a
                                                        class="btn" href="#">Add to <i
                                                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                        href="#">&euro;222.00</a></h4>
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

    <!-- MainBody End ============================= -->
@endsection
