@extends('layouts.admin')

@section('content')
    <div class="form-container">
        <form method="POST" action="{{ route('admin.books.store') }}">
            @csrf
            <h1 class="form-title">Thêm Sách Mới</h1>

            <div class="form-group">
                <label for="MaSach">Mã sách:</label>
                <input type="text" name="MaSach" id="MaSach" required>
            </div>

            <div class="form-group">
                <label for="TenSach">Tên sách:</label>
                <input type="text" name="TenSach" id="TenSach" required>
            </div>

            <div class="form-group">
                <label for="category_id">Danh Mục:</label>
                <select name="category_id" id="category_id" required>
                    <option value="">Chọn danh mục</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="GiaNhap">Giá nhập:</label>
                <input type="number" name="GiaNhap" id="GiaNhap" required>
            </div>

            <div class="form-group">
                <label for="GiaBan">Giá bán:</label>
                <input type="number" name="GiaBan" id="GiaBan" required>
            </div>

            <div class="form-group">
                <label for="SoLuong">Số lượng:</label>
                <input type="number" name="SoLuong" id="SoLuong" required>
            </div>

            <div class="form-group">
                <label for="NamXuatBan">Năm xuất bản:</label>
                <input type="number" name="NamXuatBan" id="NamXuatBan" required>
            </div>

            <div class="form-group">
                <label for="MoTa">Mô tả:</label>
                <textarea name="MoTa" id="MoTa"></textarea>
            </div>

            <div class="form-group">
                <label for="TrangThai">Trạng Thái:</label>
                <select name="TrangThai" id="TrangThai" required>
                    <option value="1">Còn hàng</option>
                    <option value="0">Hết hàng</option>
                </select>
            </div>

            <div class="form-group">
                <label for="MaNXB">Mã NXB:</label>
                <input type="text" name="MaNXB" id="MaNXB">
            </div>

            <div class="form-group">
                <button type="submit">Thêm Sách</button>
            </div>
        </form>
    </div>
@endsection

{{-- Trời ơi! Để đống css này nằm ở trong file css chung đi cho tiện, bên đây code cái search bar bên trang index không thấy phần này -> không ăn css nên lấy cdn của bootstrap qua  --}}
@section('styles')
    <style>
       /* Container cho form */
       .form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 100%; Chiều cao bằng 100% màn hình */
    padding: 10px; /* Giảm padding xung quanh container */
    background-color: #f8f9fa; /* Màu nền sáng nhẹ hơn */
}

form {
    background-color: #ffffff; /* Màu nền của form */
    padding: 15px; /* Giảm padding bên trong form */
    border-radius: 8px; /* Đường bo góc mềm mại */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng nhẹ */
    width: 100%;
     max-width: 1250px; /*Giới hạn chiều rộng form nhỏ hơn */
    box-sizing: border-box;
}

/* Nhóm các phần tử form */
.form-group {
    margin-bottom: 15px;
}

/* Định dạng cho label */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

/* Định dạng cho các input, select, và textarea */
input, select, textarea {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Định dạng cho textarea */
textarea {
    height: 120px;
    resize: vertical;
}

/* Định dạng cho nút bấm */
button {
    background-color:#28a745;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

button:hover {
    background-color:rgb(21, 206, 86);
}

/* Căn giữa tiêu đề */
h1.text-center {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
}
    </style>
@endsection
