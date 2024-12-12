@extends('layouts.admin')

@section('content')
<h1>Thêm sách mới</h1>

    <form method="POST" action="{{ route('admin.books.store') }}">
        @csrf

        <label for="MaSach">Mã sách:</label>
        <input type="text" name="MaSach" id="MaSach" required>

        <label for="TenSach">Tên sách:</label>
        <input type="text" name="TenSach" id="TenSach" required>

        <label for="category_id">Danh Mục:</label>
        <select name="category_id" id="category_id" required>
            <option value="">Chọn danh mục</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="GiaNhap">Giá nhập:</label>
        <input type="number" name="GiaNhap" id="GiaNhap" required>

        <label for="GiaBan">Giá bán:</label>
        <input type="number" name="GiaBan" id="GiaBan" required>

        <label for="SoLuong">Số lượng:</label>
        <input type="number" name="SoLuong" id="SoLuong" required>

        <label for="NamXuatBan">Năm xuất bản:</label>
        <input type="number" name="NamXuatBan" id="NamXuatBan" required>

        <label for="MoTa">Mô tả:</label>
        <textarea name="MoTa" id="MoTa"></textarea>

        <label for="TrangThai">Trạng Thái:</label>
        <select name="TrangThai" id="TrangThai" required>
            <option value="1">Còn hàng</option>
            <option value="0">Hết hàng</option>
        </select>

        
        <label for="MaNXB">Mã NXB:</label>
        <input type="text" name="MaNXB" id="MaNXB">

        <button type="submit">Thêm Sách</button>
    </form>
@endsection
