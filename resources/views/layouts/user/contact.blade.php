@extends('layouts.user.layout')

@section('content')
    <div class="container">
        <hr class="soften">
        <h1>Liên Hệ Với Chúng Tôi</h1>
        <hr class="soften" />
        <div class="row">
            <!-- Thông Tin Liên Hệ -->
            <div class="span4">
                <h4>Thông Tin Liên Hệ</h4>
                <p>
                    123 Đường Sách,<br />
                    Quận 1, Thành phố Hồ Chí Minh, Việt Nam<br /><br />
                    info@bookstore.vn<br />
                    Tel: +84 1234 5678<br />
                    Fax: +84 8765 4321<br />
                    Web: localhost
                </p>
            </div>

            <!-- Giờ Mở Cửa -->
            <div class="span4">
                <h4>Giờ Mở Cửa</h4>
                <h5>Thứ Hai - Thứ Sácu</h5>
                <p>08:00 - 20:00<br /><br /></p>
                <h5>Thứ Bảy</h5>
                <p>09:00 - 18:00<br /><br /></p>
                <h5>Chủ Nhật</h5>
                <p>10:00 - 17:00<br /><br /></p>
            </div>

            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <label for="ho_ten">Họ và Tên</label>
                <input type="text" id="ho_ten" name="ho_ten" placeholder="Nhập họ và tên" required />

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required />

                <label for="chu_de">Chủ Đề</label>
                <input type="text" id="chu_de" name="chu_de" placeholder="Nhập chủ đề" />

                <label for="noi_dung">Nội Dung</label>
                <textarea id="noi_dung" name="noi_dung" placeholder="Nhập nội dung liên hệ tại đây..." required></textarea>

                <button type="submit">Gửi Thông Tin</button>
            </form>

            @if (session('success'))
                <p>{{ session('success') }}</p>
            @endif

        </div <!-- Google Map -->
        <div class="row">
            <div class="span12">
                <h4>Vị Trí Của Chúng Tôi</h4>
                <iframe style="width:100%; height:300px; border:0;" scrolling="no"
                    src="https://maps.google.com/maps?q=123%20Đường%20Sách,%20Quận%201,%20Thành%20phố%20Hồ%20Chí%20Minh,%20Việt%20Nam&t=&z=13&ie=UTF8&iwloc=&output=embed">
                </iframe><br />
                <small>
                    <a href="https://maps.google.com/maps?q=123%20Đường%20Sách,%20Quận%201,%20Thành%20phố%20Hồ%20Chí%20Minh,%20Việt%20Nam&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        style="color:#0000FF;text-align:left">
                        Xem Bản Đồ Lớn
                    </a>
                </small>
            </div>
        </div>
    </div>
@endsection
