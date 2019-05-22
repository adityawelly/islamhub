@extends('app')
@section('title', 'Home')

@section('content')
    <div class="mbr-cards-row row">
    @foreach ($video as $v)
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
              <div class="card cart-block">
                  <div class="card-img"><img src="{{ url($v->foto) }}" class="card-img-top"></div>
                  <div class="card-block">
                    <h4 class="card-title">{{ $v->judul }}</h4>
                    <p class="card-text">{{ $c->keterangan }}</p>
                    <div class="card-btn"><a href="{{ url('/tonton/'.$v->id) }}" class="btn btn-primary">MORE</a></div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach;        
    </div>
@endsection