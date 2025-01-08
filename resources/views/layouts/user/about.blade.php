@extends('layouts.user.layout')

@section('content')
<div class="section">

        <h2 class="section-title">BÀI VIẾT VỀ THÔNG TIN NHÓM</h2>
        <div class="featured-article">

            <div class="featured-content">
                {{-- Hiển thị hình ảnh --}}
                @foreach ($baivietnhom as $baiviet)
                <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
                    <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="featured-image">
                </a>

                {{-- Hiển thị tiêu đề --}}
                <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>

                {{-- Hiển thị nội dung --}}
                <p class="article-summary">{!! nl2br(e(Str::limit($baiviet->noidung, 100))) !!}</p>


                {{-- Hiển thị chủ đề và ngày tạo --}}
                <p class="article-meta">
                  {{ $baiviet->created_at->format('d/m/Y') }}
                </p>
                @endforeach
            </div>
  
    </div>
    <h2 class="section-title">BÀI VIẾT CHỦ ĐỀ VĂN HỌC</h2>
    <div class="main-content">
        <div class="featured-article">

            <div class="featured-content">
                {{-- Hiển thị hình ảnh --}}

                @foreach ($baiviets as $baiviet)

                <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
                    <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="featured-image">
                </a>


                {{-- Hiển thị tiêu đề --}}
                <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>


                {{-- Hiển thị nội dung --}}
                <p class="article-summary">{!! nl2br(e($baiviet->noidung)) !!}</p>

                {{-- Hiển thị chủ đề và ngày tạo --}}
                <p class="article-meta">
                    Chủ đề: {{ $baiviet->chude }} - {{ $baiviet->created_at->format('d/m/Y') }}
                </p>
                @endforeach
            </div>

        </div>

    </div>

    <div class="side-content">
        <ul class="related-articles">
            <li>
                 {{-- Hiển thị hình ảnh --}}
                 @foreach ($baiviets as $baiviet)
                 <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
                    <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="featured-image">
                </a>

                 {{-- Hiển thị tiêu đề --}}
                 <h2 ><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>

                 {{-- Hiển thị nội dung --}}
                 <p class="">{!! nl2br(e($baiviet->noidung)) !!}</p>

                 {{-- Hiển thị chủ đề và ngày tạo --}}
                 <p class="">
                     Chủ đề: {{ $baiviet->chude }} - {{ $baiviet->created_at->format('d/m/Y') }}
                 </p>
                 @endforeach
            </li>
            <li>
                         {{-- Hiển thị hình ảnh --}}
                 @foreach ($baiviets as $baiviet)
                 <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
                    <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="featured-image">
                </a>

                 {{-- Hiển thị tiêu đề --}}
                 <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>

                 {{-- Hiển thị nội dung --}}
                 <p class="">{!! nl2br(e($baiviet->noidung)) !!}</p>

                 {{-- Hiển thị chủ đề và ngày tạo --}}
                 <p class="">
                     Chủ đề: {{ $baiviet->chude }} - {{ $baiviet->created_at->format('d/m/Y') }}
                 </p>
                 @endforeach
            </li>
            <li>
                         {{-- Hiển thị hình ảnh --}}
                 @foreach ($baiviets as $baiviet)
                 <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
                    <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="featured-image">
                </a>

                 {{-- Hiển thị tiêu đề --}}
                 <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>

                 {{-- Hiển thị nội dung --}}
                 <p class="">{!! nl2br(e($baiviet->noidung)) !!}</p>

                 {{-- Hiển thị chủ đề và ngày tạo --}}
                 <p class="">
                     Chủ đề: {{ $baiviet->chude }} - {{ $baiviet->created_at->format('d/m/Y') }}
                 </p>
                 @endforeach
            </li>
        </ul>
    </div>
</div>
<div>
<h2 class="section-title">BÀI VIẾT</h2>
<div class="custom-side-content">
    <ul class="custom-related-articles">
        <li>
             {{-- Hiển thị hình ảnh --}}
             @foreach ($baiviets as $baiviet)
             <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
                <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="custom-featured-image">
            </a>

             {{-- Hiển thị tiêu đề --}}
             <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>

             {{-- Hiển thị nội dung --}}
             <p class="custom-article-summary">{!! nl2br(e($baiviet->noidung)) !!}</p>

             {{-- Hiển thị chủ đề và ngày tạo --}}
             <p class="custom-meta-info">
                 Chủ đề: {{ $baiviet->chude }} - {{ $baiviet->created_at->format('d/m/Y') }}
             </p>
             @endforeach
        </li>
        <li>
             {{-- Hiển thị hình ảnh --}}
             @foreach ($baiviets as $baiviet)
             <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
                <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="custom-featured-image">
            </a>

             {{-- Hiển thị tiêu đề --}}
             <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>

             {{-- Hiển thị nội dung --}}
             <p class="custom-article-summary">{!! nl2br(e($baiviet->noidung)) !!}</p>

             {{-- Hiển thị chủ đề và ngày tạo --}}
             <p class="custom-meta-info">
                 Chủ đề: {{ $baiviet->chude }} - {{ $baiviet->created_at->format('d/m/Y') }}
             </p>
             @endforeach
        </li>

        <li>
            {{-- Hiển thị hình ảnh --}}
            @foreach ($baiviets as $baiviet)
            <a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">
               <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="{{ $baiviet->tieude }}" class="custom-featured-image">
           </a>

            {{-- Hiển thị tiêu đề --}}
            <h2><a href="{{ route('baiviet.noidungbaiviet', $baiviet->slug) }}">{{ $baiviet->tieude }}</a></h2>

            {{-- Hiển thị nội dung --}}
            <p class="custom-article-summary">{!! nl2br(e($baiviet->noidung)) !!}</p>

            {{-- Hiển thị chủ đề và ngày tạo --}}
            <p class="custom-meta-info">
                Chủ đề: {{ $baiviet->chude }} - {{ $baiviet->created_at->format('d/m/Y') }}
            </p>
            @endforeach
       </li>
    </ul>
</div>
</div>
<div class="categories">

    <div class="category">
        <h2 class="category-title manga">SÁCH THIẾU NHI</h2>
        <div class="featured-article">
            <div class="featured-content">
                <a href="{{ route('baiviet.noidungbaiviet', $chudenthieunhi->first()->slug) }}">
                    <img src="{{ asset('bookimage/' . $chudenthieunhi->first()->anhbaiviet) }}" alt="{{ $chudenthieunhi->first()->tieude }}" class="featured-image">
                </a>

                <h2><a href="{{ route('baiviet.noidungbaiviet', $chudenthieunhi->first()->slug) }}">{{ $chudenthieunhi->first()->tieude }}</a></h2>

                <p class="article-summary">{!! nl2br(e($chudenthieunhi->first()->noidung)) !!}</p>

                <p class="article-meta">
                    Chủ đề: {{ $chudenthieunhi->first()->chude }} - {{ $chudenthieunhi->first()->created_at->format('d/m/Y') }}
                </p>
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

    <!-- Chủ đề: VĂN HỌC CỔ ĐIỂN -->
    <div class="category">
        <h2 class="category-title manga">VĂN HỌC CỔ ĐIỂN</h2>
        <div class="featured-article">
            <div class="featured-content">
                <a href="{{ route('baiviet.noidungbaiviet', $chudenvanhoccodien->first()->slug) }}">
                    <img src="{{ asset('bookimage/' . $chudenvanhoccodien->first()->anhbaiviet) }}" alt="{{ $chudenvanhoccodien->first()->tieude }}" class="featured-image">
                </a>

                <h2><a href="{{ route('baiviet.noidungbaiviet', $chudenvanhoccodien->first()->slug) }}">{{ $chudenvanhoccodien->first()->tieude }}</a></h2>

                <p class="article-summary">{!! nl2br(e($chudenvanhoccodien->first()->noidung)) !!}</p>


                <<p class="article-meta">
                    Chủ đề: {{ $chudenvanhoccodien->first()->chude }} -
                    {{ $chudenvanhoccodien->first()->created_at ? $chudenvanhoccodien->first()->created_at->format('d/m/Y') : 'N/A' }}
                </p>
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

    <!-- Chủ đề: VĂN HỌC HIỆN ĐẠI -->
    <div class="category">
        <h2 class="category-title manga">VĂN HỌC HIỆN ĐẠI</h2>
        <div class="featured-article">
            <div class="featured-content">
                <a href="{{ route('baiviet.noidungbaiviet', $chudevanhochiendai->first()->slug) }}">
                    <img src="{{ asset('bookimage/' . $chudevanhochiendai->first()->anhbaiviet) }}" alt="{{ $chudevanhochiendai->first()->tieude }}" class="featured-image">
                </a>

                <h2><a href="{{ route('baiviet.noidungbaiviet', $chudevanhochiendai->first()->slug) }}">{{ $chudevanhochiendai->first()->tieude }}</a></h2>

                <p class="article-summary">{!! nl2br(e($chudevanhochiendai->first()->noidung)) !!}</p>

                <p class="article-meta">
                    Chủ đề: {{ $chudevanhochiendai->first()->chude }} - {{ $chudevanhochiendai->first()->created_at->format('d/m/Y') }}
                </p>
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
