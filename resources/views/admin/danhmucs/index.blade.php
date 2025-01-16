<!-- resources/views/admin/danhmucs/index.blade.php -->
@extends('layouts.admin')

@section('content')
    @if(session('success'))
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
        <div class="row">
            <!-- Ô tìm kiếm theo tên danh mục -->
            <div class="col-md-4">
                <label for="query">Tìm theo tên danh mục:</label>
                <input type="search" id="query" name="query" placeholder="Nhập tên danh mục"
                       class="form-control" value="{{ request('query') }}">
            </div>

            <!-- Chọn danh mục con -->
            <div class="col-md-4">
                <label for="child_category">Tìm theo danh mục con:</label>
                <select name="child_category" id="child_category" class="form-control">
                    <option value="">Chọn danh mục con</option>
                    @foreach($danhmucs as $parent)
                        @if($parent->children->isNotEmpty())
                            <optgroup label="{{ $parent->name }}">
                                @foreach($parent->children as $child)
                                    <option value="{{ $child->id }}"
                                            {{ request('child_category') == $child->id ? 'selected' : '' }}>
                                        {{ $child->name }}
                                    </option>
                                @endforeach
                            </optgroup>
                        @endif
                    @endforeach
                </select>
            </div>

            <!-- Sắp xếp theo ngày tạo -->
            <div class="col-md-2">
                <label for="sort_order">Sắp xếp theo ngày tạo:</label>
                <select name="sort_order" id="sort_order" class="form-control">
                    <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Tăng dần</option>
                    <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Giảm dần</option>
                </select>
            </div>

            <!-- Nút tìm kiếm -->
            <div class="col-md-2 align-self-end">
                <button class="btn btn-primary mt-3" type="submit">Tìm kiếm</button>
            </div>
        </div>
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
            @foreach($danhmucs as $danhmuc)
                <tr>
                    <td>{{ $danhmuc->name }}</td>

                    <td>
                        <a href="{{ route('admin.danhmucs.edit', $danhmuc->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.danhmucs.destroy', $danhmuc->id) }}" method="POST" style="display:inline;" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                    <td>
                        @if($danhmuc->children->isNotEmpty())
                            <ul>
                                @foreach($danhmuc->children as $child)
                                    <li>
                                        {{ $child->name }}
                                        <a href="{{ route('admin.danhmucs.edit', $child->id) }}" class="btn btn-warning">Sửa</a>
                                        <form action="{{ route('admin.danhmucs.destroy', $child->id) }}" method="POST" style="display:inline;" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            Không có
                        @endif
                    </td>

                </tr>
            @endforeach
        </tbody>
        <script>
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function (e) {
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
