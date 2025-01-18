@extends('layouts.user.layout')

@section('title', 'Nội dung bài viết')

@section('content')
<div class="container py-5">
    <!-- Bài viết chính -->
    <div class="main-post">
        <h1 class="display-4 fw-bold text-primary">{{ $baiviet->tieude }}</h1>

        <section class="details mb-4">
            <h2>Thông tin chi tiết</h2>
            <p>{!! nl2br($baiviet->noidung) !!}
            </p>

            <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="Image" class="rounded" style="width: 300px; height: auto; object-fit: cover;">

        </section>


        <div class="image mb-4 text-center">

        </div>

        <div class="post-info mb-4">
            <p class="text-muted">Ngày đăng: {{ \Carbon\Carbon::parse($baiviet->created_at)->format('d/m/Y') }}</p>
        </div>

        @if (!Request::is('about/thong-tin-ve-phpcraft'))
            <section class="similar-posts-section mt-5">
                <h3 class="text-primary">Bài viết tương tự</h3>
                <div class="similar-posts">
                    @foreach ($baiviettt as $post)
                        <div class="card">
                            <a href="{{ route('baiviet.noidungbaiviet', $post->slug) }}" class="text-decoration-none">
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
        @endif

</div>
@endsection
