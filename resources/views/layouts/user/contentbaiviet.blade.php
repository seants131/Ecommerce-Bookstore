@extends('layouts.user.layout')

@section('content')
<div class="container py-5">
    <!-- Bài viết chính -->
    <div class="main-post">
        <h1 class="display-4 fw-bold text-primary">{{ $baiviet->tieude }}</h1>

        <section class="intro mb-4">
            <h2>Giới thiệu</h2>
            <p>{!! Str::limit($baiviet->noidung, 200) !!}</p>
        </section>

        <section class="details mb-4">
            <h2>Thông tin chi tiết</h2>
            <p>{!! $baiviet->noidung !!}</p>
        </section>

        <div class="image mb-4 text-center">
            <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="Image" class="rounded" style="width: 300px; height: auto; object-fit: cover;">
        </div>

        <div class="post-info mb-4">
            <p class="text-muted">Tác giả: {{ $baiviet->tacgia }}</p>
            <p class="text-muted">Ngày đăng: {{ \Carbon\Carbon::parse($baiviet->created_at)->format('d/m/Y') }}</p>
        </div>
    </div>

    <section class="similar-posts-section mt-5">
        <h3 class="text-primary">Bài viết tương tự</h3>
        <div class="similar-posts">
            @foreach ($baiviettt as $post)
                <div class="card">
                    <a href="{{ route('baiviet.contentbaiviet', $post->id) }}" class="text-decoration-none">
                        <img src="{{ asset('bookimage/' . $post->anhbaiviet) }}" alt="Image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-dark">{{ $post->tieude }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($post->noidung, 100) }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection
