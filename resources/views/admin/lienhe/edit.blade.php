@extends('layouts.admin')

@section('content')
    <h1>Chỉnh sửa Liên Hệ</h1>

    <form action="{{ route('admin.lienhe.update', $lienHe->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="ho_ten">Họ Tên</label>
            <input type="text" name="ho_ten" id="ho_ten" class="form-control" value="{{ $lienHe->ho_ten }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $lienHe->email }}" required>
        </div>

        <div class="form-group">
            <label for="chu_de">Chủ Đề</label>
            <input type="text" name="chu_de" id="chu_de" class="form-control" value="{{ $lienHe->chu_de }}">
        </div>

        <div class="form-group">
            <label for="noi_dung">Nội Dung</label>
            <textarea name="noi_dung" id="noi_dung" class="form-control" required>{{ $lienHe->noi_dung }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật Liên Hệ</button>
    </form>
@endsection
