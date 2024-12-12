<!-- resources/views/admin/danhmucs/create.blade.php -->
@extends('layouts.admin')

@section('content')
    <h1>Thêm danh mục mới</h1>

    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.danhmucs.store') }}">
        @csrf

        <label for="name">Tên danh mục</label>
        <input type="text" name="name" id="name" required>

        <label for="parent_id">Danh mục cha</label>
        <select name="parent_id" id="parent_id">
            <option value="">Không có</option>
            @foreach($danhmucs as $danhmuc)
                <option value="{{ $danhmuc->id }}">{{ $danhmuc->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-success">Tạo danh mục</button>
    </form>
@endsection
