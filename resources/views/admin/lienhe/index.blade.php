@extends('layouts.admin')
@section('title', 'Quản lý liên hệ')

@section('content')
    <h1>Danh sách Liên Hệ</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.lienhe.create') }}" class="btn btn-primary">Tạo mới Liên Hệ</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Chủ đề</th>
                <th>Nội dung</th>
                <th>Ngày tạo</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lienHes as $lienHe)
                <tr>
                    <td>{{ $lienHe->id }}</td>
                    <td>{{ $lienHe->ho_ten }}</td>
                    <td>{{ $lienHe->email }}</td>
                    <td>{{ $lienHe->chu_de }}</td>
                    <td>{{ $lienHe->noi_dung }}</td>
                    <td>{{ $lienHe->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.lienhe.edit', $lienHe->id) }}" class="btn btn-warning">Chỉnh sửa</a>

                        <form action="{{ route('admin.lienhe.destroy', $lienHe->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
