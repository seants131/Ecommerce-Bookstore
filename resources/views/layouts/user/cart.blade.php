@extends('layouts.user.layout')

@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active"> SHOPPING CART</li>
        </ul>
        <h3> SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i
                    class="icon-arrow-left"></i> Continue Shopping </a></h3>
        <hr class="soft" />

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Description</th>
                    <th>Quantity/Update</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Tax</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <img width="60" src="themes/images/products/4.jpg" alt="" /></td>
                    <td>Giáo Dục Giới Tính Cho Con Trai<br />Nhà cung cấp:Minh Long <br/>Nhà xuất bản:Phụ Nữ Việt Nam</td>
                    <td>
                        <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"
                                id="appendedInputButtons" size="16" type="text"><button class="btn"
                                type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i
                                    class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i
                                    class="icon-remove icon-white"></i></button> </div>
                    </td>
                    <td>58.500 đ</td>
                    <td>35%</td>
                    <td>0 đ</td>
                    <td>38.025 đ</td>
                </tr>
                <tr>
                    <td> <img width="60" src="themes/images/products/8.jpg" alt="" /></td>
                    <td>Những Kẻ Xuất Chúng (Tái Bản 2021)<br />Nhà cung cấp:Alpha Books <br />Nhà xuất bản:NXB Thế Giới</td>
                    <td>
                        <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"
                                size="16" type="text"><button class="btn" type="button"><i
                                    class="icon-minus"></i></button><button class="btn" type="button"><i
                                    class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i
                                    class="icon-remove icon-white"></i></button> </div>
                    </td>
                    <td>111.300 đ</td>
                    <td>30%</td>
                    <td>0 đ</td>
                    <td>77.910 đ.</td>
                </tr>
                <tr>
                    <td> <img width="60" src="themes/images/products/3.jpg" alt="" /></td>
                    <td>Bạn Đang Nghịch Gì Với Đời Mình?<br />Nhà cung cấp:FIRST NEWS <br />Nhà xuất bản:Hồng Đức</td>
                    <td>
                        <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"
                                size="16" type="text"><button class="btn" type="button"><i
                                    class="icon-minus"></i></button><button class="btn" type="button"><i
                                    class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i
                                    class="icon-remove icon-white"></i></button> </div>
                    </td>
                    <td>62.000 đ</td>
                    <td>50%</td>
                    <td>0 đ</td>
                    <td>31.000 đ.</td>
                </tr>

                <tr>
                    <td colspan="6" style="text-align:right">Total Price: </td>
                    <td> 231.800 đ</td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align:right">Total Discount: </td>
                    <td>84.865 đ</td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align:right">Total Tax: </td>
                    <td> 0đ</td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align:right"><strong>TOTAL (231.800-84.865+0) =</strong></td>
                    <td class="label label-important" style="display:block"> <strong> 146.935 đ </strong></td>
                </tr>
            </tbody>
        </table>


        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <form class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
                                <div class="controls">
                                    <input type="text" class="input-medium" placeholder="CODE" style="width: 300px">
                                    <button type="submit" class="btn"> OK </button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>

        <table class="table table-bordered">
            <tr>
                <th>SHIPPING ADDRESS </th>
            </tr>
            <tr>
                <td>
                    <form class="form-horizontal">
                        <div>
                            <div style="display: flex">
                                <div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputCountry">Họ tên</label>
                                        <div class="controls">
                                            <input type="text" id="inputCountry" placeholder="Họ tên">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPost">Email </label>
                                        <div class="controls">
                                            <input type="text" id="inputPost" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputCountry">Quận/Huyện </label>
                                        <div class="controls">
                                            <input type="text" id="inputCountry" placeholder="Quận/Huyện">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPost">Tỉnh/Thành phố </label>
                                        <div class="controls">
                                            <select type="text" id="inputPost" placeholder="Tỉnh/Thành phố"></select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputCountry">Phường/Xã</label>
                                        <div class="controls">
                                            <select type="text" id="inputCountry" placeholder="Phường/Xã"></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputCountry">Số nhà/Tên đường </label>
                                <div class="controls">
                                    <input type="text" id="inputCountry" placeholder="Số nhà/Tên đường"
                                        style="width: 608px">
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-large">OK </button>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
        <a href="{{ url('/product') }}" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
        <a href="{{ url('/') }}" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
    </div>
@endsection
