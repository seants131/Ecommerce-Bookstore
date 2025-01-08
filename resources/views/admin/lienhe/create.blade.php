@extends('layouts.admin')

@section('content')
    <h1>Tạo mới Liên Hệ</h1>

    <form action="{{ route('admin.lienhe.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ho_ten">Họ Tên</label>
            <input type="text" name="ho_ten" id="ho_ten" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="chu_de">Chủ Đề</label>
            <input type="text" name="chu_de" id="chu_de" class="form-control">
        </div>

        <div class="form-group">
            <label for="noi_dung">Nội Dung</label>
            <textarea name="noi_dung" id="noi_dung" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Lưu Liên Hệ</button>
    </form>
@endsection
