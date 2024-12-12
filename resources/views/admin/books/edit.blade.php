@extends('layouts.admin')

@section('content')
<h1>Sửa sách</h1>

    <form method="POST" action="{{ route('admin.books.update', $book->MaSach) }}">
        @csrf
        @method('PUT')

        <label for="MaSach">Mã sách:</label>
        <input type="text" name="MaSach" id="MaSach" value="{{ old('MaSach', $book->MaSach) }}" required readonly>

        <label for="TenSach">Tên sách:</label>
        <input type="text" name="TenSach" id="TenSach" value="{{ old('TenSach', $book->TenSach) }}" required>

        <label for="category_id">Danh Mục:</label>
        <select name="category_id" id="category_id" required>
            <option value="">Chọn danh mục</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <label for="GiaNhap">Giá nhập:</label>
        <input type="number" name="GiaNhap" id="GiaNhap" value="{{ old('GiaNhap', $book->GiaNhap) }}" required>

        <label for="GiaBan">Giá bán:</label>
        <input type="number" name="GiaBan" id="GiaBan" value="{{ old('GiaBan', $book->GiaBan) }}" required>

        <label for="SoLuong">Số lượng:</label>
        <input type="number" name="SoLuong" id="SoLuong" value="{{ old('SoLuong', $book->SoLuong) }}" required>

        <label for="NamXuatBan">Năm xuất bản:</label>
        <input type="number" name="NamXuatBan" id="NamXuatBan" value="{{ old('NamXuatBan', $book->NamXuatBan) }}" required>

        <label for="MoTa">Mô tả:</label>
        <textarea name="MoTa" id="MoTa">{{ old('MoTa', $book->MoTa) }}</textarea>

        <label for="TrangThai">Trạng Thái:</label>
        <select name="TrangThai" id="TrangThai" required>
            <option value="1" {{ $book->TrangThai == 1 ? 'selected' : '' }}>Còn hàng</option>
            <option value="0" {{ $book->TrangThai == 0 ? 'selected' : '' }}>Hết hàng</option>
        </select>

        <label for="MaNXB">Mã NXB:</label>
        <input type="text" name="MaNXB" id="MaNXB" value="{{ old('MaNXB', $book->MaNXB) }}">

        <button type="submit" class="btn btn-warning">Cập nhật sách</button>
    </form>
@endsection
