@extends('layouts.admin') <!-- Kế thừa layout -->

@section('content')
    <h1>Thông tin trang web</h1>
    <form action="{{ route('post.update', $ndweb->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Tiêu đề -->
        <div class="form-group">
            <label for="tieude">Tiêu đề</label>
            <input type="text" name="tieude" value="{{ $ndweb->tieude }}" class="form-control" required>
        </div>

        <!-- Nội dung -->
        <div class="form-group">
            <label for="noidung">Nội dung</label>
            <textarea name="noidung" class="form-control" style="height: 200px" required>{{ $ndweb->noidung }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
