@extends('app')
@section('title', $video->judul)

@section('content')
    <div class="mbr-cards-row row">
        <h3>{{$video->judul}}</h3>
        <center>{{!! $video->embedCode !!}}</center>
        <p>{{$video->judul}}</p>
    </div>
@endsection