<!-- resources/views/admin/danhmucs/index.blade.php -->
@extends('layouts.admin')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <h1>Danh sách danh mục</h1>
    <!-- Search Bar -->
    <form action="{{ route('admin.danhmucs.search') }}" method="POST" class="form-group">
        @csrf
        <input type="search" name="query" placeholder="Tìm kiếm danh mục" aria-label="Search" class="form-control">
        <button class="btn btn-primary" type="submit" style="max-width: 15%; margin-top: 1px">Tìm kiếm</button>
    </form>
    <br>
    {{-- end search --}}
    <a href="{{ route('admin.danhmucs.create') }}" class="btn btn-success" style="color: white;">Thêm danh mục</a>
    <div class="order-info">
        <table>
            <thead>
                <tr>
                    <th>Tên Danh Mục</th>
                    <th>Hành động</th>
                    <th>Danh Mục Con</th>
                </tr>
            </thead>
            <tbody>
                @if ($danhmucs->isEmpty())
                    <tr>
                        <td colspan="3">Không tìm thấy danh mục nào.</td>
                    </tr>
                @else
                    @foreach ($danhmucs as $danhmuc)
                        <tr>
                            <td>{{ $danhmuc->name }}</td>
                            <td>
                                <a href="{{ route('admin.danhmucs.edit', $danhmuc->id) }}" class="btn btn-warning">Sửa</a>
                                <form action="{{ route('admin.danhmucs.destroy', $danhmuc->id) }}" method="POST"
                                    style="display:inline;" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                            <td>
                                @if ($danhmuc->children->isNotEmpty())
                                    <ul>
                                        @foreach ($danhmuc->children as $child)
                                            <li>{{ $child->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    Không có
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <script>
                document.querySelectorAll('.delete-form').forEach(form => {
                    form.addEventListener('submit', function(e) {
                        const confirmDelete = confirm('Bạn có chắc chắn muốn xóa danh mục này không?');
                        if (!confirmDelete) {
                            e.preventDefault(); // Ngăn form submit nếu người dùng chọn "Hủy"
                        }
                    });
                });
            </script>

        </table>
    </div>
@endsection
<!-- ghichu -->
