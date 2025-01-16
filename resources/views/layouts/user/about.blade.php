@extends('layouts.user.layout')

@section('content')
<div class="section">

    <h2 class="section-title">BÀI VIẾT VỀ THÔNG TIN NHÓM</h2>
    <div class="featured-article">
        <div class="featured-content">
            {{-- Hiển thị bài viết về nhóm --}}
            @foreach ($baivietnhom as $baiviet)
                <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
                    <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="featured-image">
                </a>
                <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>
                <p class="article-summary">{!! nl2br(e(Str::limit($baiviet->noidung, 50))) !!}</p>
                <p class="article-meta">{{ $baiviet->created_at->format('d/m/Y') }}</p>
            @endforeach
        </div>
    </div>

    <h2 class="section-title">TẤT CẢ CÁC BÀI VIẾT</h2>
    <h2 class="section-title">TẤT CẢ CÁC BÀI VIẾT</h2>
    <div class="side-content">
        <form action="{{ route('baiviet.index') }}" method="GET">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Nhập từ khóa tìm kiếm...">
            <button type="submit">Tìm kiếm</button>
            <button type="submit" name="sort" value="desc">Sắp xếp mới nhất</button>
            <button type="submit" name="sort" value="asc">Sắp xếp cũ nhất</button>
        </form>
        @if ($baiviets->isEmpty())
            <p class="no-results">Không tìm thấy bài viết nào khớp với từ khóa "{{ $search }}"</p>
        @else
            <ul class="related-articles">
                @foreach ($baiviets as $baiviet)
                    <li>
                        <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
                            <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="featured-image">
                        </a>
                        <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>
                        <p class="article-summary">{!! nl2br(e(Str::limit($baiviet->noidung, 50))) !!}</p>
                        <p class="article-meta">{{ $baiviet->created_at->format('d/m/Y') }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
        {{-- giu nguyen tham so sort --}}
        <div class="pagination">
            {{ $baiviets->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>
    </div>
    
    <h2 class="section-title">TÂM LÝ HỌC</h2>
    <div class="custom-side-content">
        <ul class="custom-related-articles">
            @foreach ($tamlyhoc as $baiviet)
                <li>
                    <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
                        <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="custom-featured-image">
                    </a>
                    <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>
                    <p class="article-summary">{!! nl2br(e(Str::limit($baiviet->noidung, 50))) !!}</p>
                    <p class="custom-meta-info">Chủ đề: {{ $baiviet->chude }} - {{ $baiviet->created_at->format('d/m/Y') }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="categories">

    {{-- Chủ đề: Sách thiếu nhi --}}
    <div class="category">
        <h2 class="category-title manga">SÁCH THIẾU NHI</h2>
        <div class="featured-article">
            <div class="featured-content">
                @if($chudenthieunhi && $chudenthieunhi->first())
                    <a href="{{ route('baiviet.noidungbaiviet', $chudenthieunhi->first()->slug) }}">
                        <img src="{{ asset('bookimage/' . $chudenthieunhi->first()->anhbaiviet) }}" alt="{{ $chudenthieunhi->first()->tieude }}" class="featured-image">
                    </a>
                    <h2><a href="{{ route('baiviet.noidungbaiviet', $chudenthieunhi->first()->slug) }}">{{ $chudenthieunhi->first()->tieude }}</a></h2>
                    <p class="article-summary">{!! nl2br(e(Str::limit($chudenthieunhi->first()->noidung, 50))) !!}</p>
                    <p class="article-meta">Chủ đề: {{ $chudenthieunhi->first()->chude }} - {{ $chudenthieunhi->first()->created_at->format('d/m/Y') }}</p>
                @endif
            </div>
        </div>
        <ul class="related-articles">
            @foreach($chudenthieunhi->slice(1, 2) as $baiviet)
                <li>
                    <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }} - {{ $baiviet->created_at->format('d/m/Y') }}</a></h2>
                </li>
            @endforeach
        </ul>
    </div>

    {{-- Chủ đề: Văn học cổ điển --}}
    <div class="category">
        <h2 class="category-title manga">VĂN HỌC CỔ ĐIỂN</h2>
        <div class="featured-article">
            <div class="featured-content">
                @if($chudenvanhoccodien && $chudenvanhoccodien->first())
                    <a href="{{ route('baiviet.noidungbaiviet', $chudenvanhoccodien->first()->slug) }}">
                        <img src="{{ asset('bookimage/' . $chudenvanhoccodien->first()->anhbaiviet) }}" alt="{{ $chudenvanhoccodien->first()->tieude }}" class="featured-image">
                    </a>
                    <h2><a href="{{ route('baiviet.noidungbaiviet', $chudenvanhoccodien->first()->slug) }}">{{ $chudenvanhoccodien->first()->tieude }}</a></h2>
                    <p class="article-summary">{!! nl2br(e(Str::limit($chudenvanhoccodien->first()->noidung, 50))) !!}</p>
                    <p class="article-meta">Chủ đề: {{ $chudenvanhoccodien->first()->chude }} - {{ $chudenvanhoccodien->first()->created_at->format('d/m/Y') }}</p>
                @endif
            </div>
        </div>
        <ul class="related-articles">
            @foreach($chudenvanhoccodien->slice(1, 2) as $baiviet)
                <li>
                    <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }} - {{ $baiviet->created_at->format('d/m/Y') }}</a></h2>
                </li>
            @endforeach
        </ul>
    </div>

    {{-- Chủ đề: Văn học hiện đại --}}
    <div class="category">
        <h2 class="category-title manga">VĂN HỌC HIỆN ĐẠI</h2>
        <div class="featured-article">
            <div class="featured-content">
                @if($chudevanhochiendai && $chudevanhochiendai->first())
                    <a href="{{ route('baiviet.noidungbaiviet', $chudevanhochiendai->first()->slug) }}">
                        <img src="{{ asset('bookimage/' . $chudevanhochiendai->first()->anhbaiviet) }}" alt="{{ $chudevanhochiendai->first()->tieude }}" class="featured-image">
                    </a>
                    <h2><a href="{{ route('baiviet.noidungbaiviet', $chudevanhochiendai->first()->slug) }}">{{ $chudevanhochiendai->first()->tieude }}</a></h2>
                    <p class="article-summary">{!! nl2br(e(Str::limit($chudevanhochiendai->first()->noidung, 50))) !!}</p>
                    <p class="article-meta">Chủ đề: {{ $chudevanhochiendai->first()->chude }} - {{ $chudevanhochiendai->first()->created_at->format('d/m/Y') }}</p>
                @endif
            </div>
        </div>
        <ul class="related-articles">
            @foreach($chudevanhochiendai->slice(1, 2) as $baiviet)
                <li>
                    <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }} - {{ $baiviet->created_at->format('d/m/Y') }}</a></h2>
                </li>
            @endforeach
        </ul>
    </div>

</div>

@endsection
