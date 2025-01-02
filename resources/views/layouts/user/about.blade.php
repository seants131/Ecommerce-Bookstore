@extends('layouts.user.layout')

@section('content')
<link href="css/media_query.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="css/animate.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
<!-- Bootstrap CSS -->
<link href="css/style_1.css" rel="stylesheet" type="text/css"/>
<!-- Modernizr JS -->
<script src="js/modernizr-3.5.0.min.js"></script>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin tức sách</div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="bookimage/book1.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        @foreach ($baiviets as $baiviet)
                        <a href="{{ route('baiviet.contentbaiviet', $baiviet->id) }}" class="list-group-item list-group-item-action">
                            <img src="{{ asset('/' . $baiviet->anhbaiviet) }}" alt="Image" class="img-fluid" width="200" height="100">

                            <h5 class="mb-1">{{ $baiviet->tieude }}</h5>
                            <p class="mb-1">{{ Str::limit($baiviet->noidung, 150) }}</p>
                        </a>
                    @endforeach

                    </div>

                </div>

                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Bài viết theo chủ đề</div>
                </div>

                @foreach ($chudetin as $chude => $baiviets)
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Chủ đề: {{ $chude }}</div>
                    </div>

                    <div class="row pb-4">
                        @foreach ($baiviets->take(3) as $baiviet)
                            <div class="col-md-4">
                                <a href="{{ route('baiviet.contentbaiviet', $baiviet->id) }}" class="list-group-item list-group-item-action">
                                    <img src="{{ asset('/' . $baiviet->anhbaiviet) }}" alt="Image" class="img-fluid" width="200" height="100">

                                    <h5 class="mb-1">{{ $baiviet->tieude }}</h5>
                                    <p class="mb-1">{{ Str::limit($baiviet->noidung, 50) }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach



            </div>

         
        </div>
        <div class="row mx-0">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Trước</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Tiếp theo <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
             </div>
        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
    <span id="themesBtn"></span>
@endsection
