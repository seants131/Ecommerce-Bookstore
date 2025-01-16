@extends('layouts.admin')

@section('content')
    <div class="form-container">
        <form method="POST" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">
            @csrf
            <h1 class="form-title">Thêm Sách Mới</h1>

            <!-- Hiển thị lỗi nếu có -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="MaSach">Mã sách:</label>
                <input type="text" name="MaSach" id="MaSach" required value="{{ old('MaSach') }}">
            </div>

            <div class="form-group">
                <label for="HinhAnh">Hình ảnh:</label>
                <input type="file" name="HinhAnh" id="HinhAnh" accept="image/*">
            </div>

            <div class="form-group">
                <label for="TenSach">Tên sách:</label>
                <input type="text" name="TenSach" id="TenSach" required value="{{ old('TenSach') }}">
            </div>

            <div class="form-group">
                <label for="category_id">Danh Mục:</label>
                <select name="category_id" id="category_id" required>
                    <option value="">Chọn danh mục</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="GiaNhap">Giá nhập:</label>
                <input type="number" name="GiaNhap" id="GiaNhap" required value="{{ old('GiaNhap') }}">
            </div>

            <div class="form-group">
                <label for="GiaBan">Giá bán:</label>
                <input type="number" name="GiaBan" id="GiaBan" required value="{{ old('GiaBan') }}">
            </div>

            <div class="form-group">
                <label for="SoLuong">Số lượng:</label>
                <input type="number" name="SoLuong" id="SoLuong" required value="{{ old('SoLuong') }}">
            </div>

            <div class="form-group">
                <label for="NamXuatBan">Năm xuất bản:</label>
                <input type="number" name="NamXuatBan" id="NamXuatBan" required value="{{ old('NamXuatBan') }}">
            </div>

            <div class="form-group">
                <label for="MoTa">Mô tả:</label>
                <textarea name="MoTa" id="MoTa">{{ old('MoTa') }}</textarea>
            </div>

            <div class="form-group">
                <label for="TrangThai">Trạng Thái:</label>
                <select name="TrangThai" id="TrangThai" required>
                    <option value="1" {{ old('TrangThai') == '1' ? 'selected' : '' }}>Còn hàng</option>
                    <option value="0" {{ old('TrangThai') == '0' ? 'selected' : '' }}>Hết hàng</option>
                </select>
            </div>

            <div class="form-group">
                <label for="MaNXB">Mã NXB:</label>
                <input type="text" name="MaNXB" id="MaNXB" value="{{ old('MaNXB') }}">
            </div>

            <div class="form-group">
                <button type="submit">Thêm Sách</button>
            </div>
        </form>
    </div>
@endsection

@section('styles')
    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background-color: #f8f9fa;
        }

        form {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1250px;
            box-sizing: border-box;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: rgb(21, 206, 86);
        }

        h1.text-center {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
    </style>
@endsection
