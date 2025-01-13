@extends('layouts.user.UserLayout')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Thông tin người dùng</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('user.update') }}" method="POST">
                @csrf
                <input type="hidden" name="MaKhachHang" value="{{ $nguoiDung->MaKhachHang }}">
                <input type="hidden" name="username" value="{{ $nguoiDung->TenDangNhap }}">
                <div class="user-info">
                    <div class="user-info-item">
                        <strong>Tên đăng nhập:</strong> {{ $nguoiDung->TenDangNhap }}
                    </div>
                    <div class="user-info-item">
                        <strong>Họ tên:</strong> {{ $nguoiDung->HoTen }}
                    </div>
                    <div class="user-info-item">
                        <strong>Giới tính:</strong> {{ $nguoiDung->GioiTinh }}
                    </div>
                    <div class="user-info-item">
                        <strong>Email:</strong>
                        <input type="text" name="email" value="{{ $nguoiDung->Email }}">
                    </div>
                    <div class="user-info-item">
                        <strong>Số điện thoại:</strong>
                        <input type="text" name="phone" value="{{ $nguoiDung->SoDienThoai }}">
                    </div>
                    <div class="user-info-item">
                        <strong>Địa chỉ:</strong>
                        <input type="text" name="address" value="{{ $nguoiDung->DiaChi }}">
                    </div>
                    <div class="user-info-item text-center">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </form>
            <div class="text-center mt-3">
                <a href="{{ route('user.orders.index') }}" class="btn btn-secondary">Danh sách đơn hàng</a>
            </div>
        </div>
    </div>
</div>
@endsection
