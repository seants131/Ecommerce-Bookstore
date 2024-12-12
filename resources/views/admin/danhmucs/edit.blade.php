@extends('layouts.admin')

@section('content')
    <h1>Sửa danh mục</h1>

    <form action="{{ route('admin.danhmucs.update', $danhmuc->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Tên danh mục -->
        <label for="name">Tên danh mục:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $danhmuc->name) }}" required>

        <!-- Danh mục cha -->
        <label for="parent_id">Danh mục cha:</label>
        <select name="parent_id" id="parent_id">
            <option value="">Chọn danh mục cha</option>
            @foreach($danhmucs as $cat)
                <option value="{{ $cat->id }}" 
                    {{ old('parent_id', $danhmuc->parent_id) == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-warning">Cập nhật danh mục</button>
    </form>
@endsection
