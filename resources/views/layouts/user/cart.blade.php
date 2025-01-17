@extends('layouts.user.layout')

@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active"> SHOPPING CART</li>
        </ul>
        <h3> SHOPPING CART [ <small> </small>]<a href="" class="btn btn-large pull-right"><i
                    class="icon-arrow-left"></i> Continue Shopping </a></h3>
        <hr class="soft" />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Giảm giá</th>
                    <th>Thuế</th>
                    <th>Tổng cộng</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalPrice = 0;
                    $totalDiscount = 0;
                    $totalTax = 0; // Thuế có thể thêm logic tính toán
                @endphp

                @if ((session('cart')) && count(session('cart')) > 0)
                    @foreach (session('cart') as $productId => $product)
                        @php
                            $price = $product['price'];
                            $quantity = $product['quantity'];
                            $discount = $price * 0.1;
                            $subtotal = ($price - $discount) * $quantity;
                            $totalPrice += $subtotal;
                            $totalDiscount += $discount * $quantity;
                        @endphp
                        <tr>
                            <td>
                                <img width="60" src="{{ asset('uploads/books/' . $product['image']) }}" alt="{{ $product['name'] }}" />
                            </td>

                            <td>{{ $product['name'] }}</td>
                            <td>
                                <div class="input-append">
                                    <input class="span1" style="max-width:34px" value="{{ $quantity }}" size="16" type="text" readonly>
                                    <button class="btn btn-sm btn-danger remove-item" data-id="{{ $productId }}" type="button">
                                        <i class="icon-remove icon-white"></i>
                                    </button>
                                </div>

                                <script>

                                    $('.remove-item').click(function() {
                                        var productId = $(this).data('id');


                                        $.ajax({
                                            url: '/cart/remove/' + productId,
                                            type: 'DELETE',
                                            success: function(response) {
                                                alert(response.success); // Hiển thị thông báo thành công
                                                // Cập nhật giỏ hàng, xóa sản phẩm khỏi giao diện
                                                $(this).closest('.cart-item').remove(); // Xóa sản phẩm khỏi giỏ hàng
                                            },
                                            error: function() {
                                                alert('Có lỗi xảy ra khi xóa sản phẩm.');
                                            }
                                        });
                                    });
                                </script>


                        </td>
                            <td>{{ number_format($price, 0, ',', '.') }} đ</td>
                            <td>{{ number_format($discount, 0, ',', '.') }} đ</td>
                            <td>0 đ</td>
                            <td>{{ number_format($subtotal, 0, ',', '.') }} đ</td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="6" style="text-align:right">TỔNG GIÁ:</td>
                        <td>{{ number_format($totalPrice, 0, ',', '.') }} đ</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right">TỔNG GIẢM GIÁ:</td>
                        <td>{{ number_format($totalDiscount, 0, ',', '.') }} đ</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right">TỔNG THUẾ:</td>
                        <td>{{ number_format($totalTax, 0, ',', '.') }} đ</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right"><strong>TỔNG (Giá - Giảm giá + Thuế):</strong></td>
                        <td class="label label-important">
                            <strong>{{ number_format($totalPrice - $totalDiscount + $totalTax, 0, ',', '.') }} đ</strong>
                        </td>

                    </tr>
                @else
                    <tr>
                        <td colspan="7" style="text-align:center">Giỏ hàng trống.</td>
                    </tr>
                @endif
            </tbody>

        </table>

        <button id="xoaAll" class="btn btn-danger">Xóa tất cả sản phẩm</button>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
        document.addEventListener("DOMContentLoaded", function () {

            $('#xoaAll').click(function () {
            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa giỏ hàng?',
                text: "Tất cả sản phẩm sẽ bị xóa!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Xóa tất cả',
                cancelButtonText: 'Hủy',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                background: '#f9f9f9'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/cart/clear',
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            Swal.fire(
                                'Giỏ hàng đã được xóa!',
                                'Tất cả sản phẩm đã bị xóa.',
                                'success'
                            );
                            setTimeout(function () {
                                location.reload(); // Làm mới trang sau 1.5 giây
                            }, 1500);
                        },
                        error: function () {
                            Swal.fire(
                                'Lỗi!',
                                'Giỏ hàng của bạn hiện tại không có sản phẩm nào để xóa.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
        </script>



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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
