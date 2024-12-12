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
                        <form action="{{ route('admin.danhmucs.destroy', $danhmuc->id) }}" method="POST" style="display:inline;">
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
                                        <form action="{{ route('admin.danhmucs.destroy', $child->id) }}" method="POST" style="display:inline;">
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
    </table>
    </div>
@endsection
<!-- ghichu -->