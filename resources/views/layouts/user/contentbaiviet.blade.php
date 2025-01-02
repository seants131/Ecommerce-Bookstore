@extends('layouts.user.layout')

@section('content')
<div class="container">
    <h1>{{ $baiviet->tieude }}</h1>
    <p>{!! $baiviet->noidung !!}</p>
    <img src="{{ asset('/' . $baiviet->anhbaiviet) }}" alt="Image" class="img-fluid" width="400" height="200">
</div>
@endsection
