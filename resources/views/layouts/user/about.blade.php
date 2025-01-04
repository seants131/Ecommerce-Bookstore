@extends('layouts.user.layout')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="intro-section mb-4">
            <h2 class="text-center text-primary fw-bold">Chào mừng khách hàng đến với Website Bán Sách</h2>
            <p class="text-center text-muted">Tại đây, chúng tôi cung cấp đa dạng các thể loại sách, từ sách văn học, khoa học, đến các sách học thuật. Khám phá ngay bộ sưu tập sách của chúng tôi để tìm kiếm những cuốn sách yêu thích hoặc những tựa sách mới nhất. Hãy tận hưởng mua sắm dễ dàng và tiện lợi cùng chúng tôi!</p>
        </div>
        <div class="col-md-8">
            <h3 class="text-primary text-center fw-bold mb-4">GIỚI THIỆU BÀI VIẾT</h3>

            <!-- Form tìm kiếm -->
            <form method="GET" action="{{ route('baiviet.index') }}" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Tìm kiếm bài viết...">
                    <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                </div>
            </form>

            @if($baiviets->isEmpty())
                <p class="text-center text-muted">Không tìm thấy bài viết nào phù hợp.</p>
            @else
                <div class="row g-4">
                    @foreach ($baiviets as $baiviet)
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm">
                                <a href="{{ route('baiviet.contentbaiviet', $baiviet->id) }}" class="text-decoration-none">
                                    <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="Image" class="card-img-top" style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark fw-bold">{{ $baiviet->tieude }}</h5>
                                        <p class="card-text text-muted">{{ Str::limit($baiviet->noidung, 100) }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="d-flex justify-content-center mt-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-lg">
                        {{ $baiviets->appends(['search' => request('search')])->links() }}
                    </ul>
                </nav>
            </div>

        </div>

        <!-- Cột phải: Sách theo chủ đề -->
        {{-- <div class="col-md-4">
            <h4 class="text-primary fw-bold mb-4">SÁCH THEO CHỦ ĐỀ</h4>
            <div>
                @foreach ($chudetin as $chude => $baivietList)
                <div class="mb-3">
                    <h5 class="text-secondary">{{ $chude }}</h5>
                    <ul class="list-unstyled">
                        @foreach ($baivietList as $baiviet)
                        <li class="mb-2">
                            <a href="{{ route('baiviet.contentbaiviet', $baiviet->id) }}" class="d-flex align-items-start">
                                <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="Image" class="rounded me-3" style="width: 70px; height: 70px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-1 text-dark fw-bold">{{ $baiviet->tieude }}</h6>
                                    <p class="mb-1 text-muted">{{ Str::limit($baiviet->noidung, 40) }}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div> --}}
        <!-- Cột phải: Sách theo chủ đề -->
<div class="col-md-4">
    <h4 class="text-primary fw-bold mb-4">BÀI VIẾT THEO CHỦ ĐỀ</h4>
    <div>
        @foreach ($chudetin as $chude => $baivietList)
        <div class="mb-3">
            <h5 class="text-secondary">{{ $chude }}</h5>
            <ul class="chude-container">
                @foreach ($baivietList as $baiviet)
                <li class="mb-2">
                    <a href="{{ route('baiviet.contentbaiviet', $baiviet->id) }}" class="d-flex align-items-start">
                        <img src="{{ asset('bookimage/' . $baiviet->anhbaiviet) }}" alt="Image" class="rounded me-3" style="width: 70px; height: 70px; object-fit: cover;">
                        <div>
                            <h6 class="mb-1 text-dark fw-bold">{{ $baiviet->tieude }}</h6>
                            <p class="mb-1 text-muted">{{ Str::limit($baiviet->noidung, 40) }}</p>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</div>

    </div>
</div>
@endsection
