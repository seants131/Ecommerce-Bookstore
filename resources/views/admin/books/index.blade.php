@extends('layouts.admin')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <h1>Danh Sách </h1>
    <a href="{{ route('admin.books.create') }}" class="btn btn-success" style="color: white;">Thêm Sách Mới</a>
    <div class="order-info">
    <table>
        <thead>
            <tr>
                <th>Mã sách</th>
                <th>Tên sách</th>
                <th>Danh mục</th>
                <th>Giá bán</th>
                <th>Số lượng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->MaSach }}</td>      <!-- Hiển thị mã sách -->
                    <td>{{ $book->TenSach }}</td>     <!-- Hiển thị tên sách -->
                    <td>{{ $book->category->name ?? 'Không có' }}</td>
                    <td>{{ $book->GiaBan }}</td>      <!-- Hiển thị giá bán -->
                    <td>{{ $book->TrangThai == 1 ? 'Còn hàng' : 'Hết hàng' }}</td> <!-- Hiển thị trạng thái -->
                    <td>
                        <a href="{{ route('admin.books.edit', $book->MaSach) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.books.destroy', $book->MaSach) }}" method="POST" style="display:inline;" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <script>
    // Lắng nghe sự kiện "submit" của các form xóa
    document.addEventListener('DOMContentLoaded', function () {
        const deleteForms = document.querySelectorAll('.delete-form');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function (e) {
                // Hiển thị hộp thoại xác nhận
                const confirmDelete = confirm('Bạn có chắc chắn muốn xóa sách này không?');

                // Nếu người dùng chọn Cancel, ngăn form gửi đi
                if (!confirmDelete) {
                    e.preventDefault();
                }
            });
        });
    });
</script>


    </table>
</div>
@endsection


