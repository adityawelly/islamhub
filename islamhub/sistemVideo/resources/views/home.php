@extends('app')
@section('title', 'Home')

@section('content')
asd
    {{print_r($video)}}
    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
              <div class="card cart-block">
                  <div class="card-img"><img src="{{ url('/') }}/assets/images/table.jpg" class="card-img-top"></div>
                  <div class="card-block">
                    <h4 class="card-title">Bootstrap 4</h4>
                    <h5 class="card-subtitle">Bootstrap 4 has been noted</h5>
                    <p class="card-text">Bootstrap 4 has been noted as one of the most reliable and proven frameworks and Mobirise has been equipped to develop websites using this framework.</p>
                    <div class="card-btn"><a href="{{ url('/') }}" class="btn btn-primary">MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><img src="{{ url('/') }}/assets/images/desktop.jpg" class="card-img-top"></div>
                    <div class="card-block">
                        <h4 class="card-title">Responsive</h4>
                        <h5 class="card-subtitle">One of Bootstrap 4's big points</h5>
                        <p class="card-text">One of Bootstrap 4's big points is responsiveness and Mobirise makes effective use of this by generating highly responsive website for you.</p>
                        <div class="card-btn"><a href="{{ url('/') }}" class="btn btn-primary">MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><img src="{{ url('/') }}/assets/images/coworkers.jpg" class="card-img-top"></div>
                    <div class="card-block">
                        <h4 class="card-title">Web Fonts</h4>
                        <h5 class="card-subtitle">Google has a highly exhaustive list of fonts</h5>
                        <p class="card-text">Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freely.</p>
                        <div class="card-btn"><a href="{{ url('/') }}" class="btn btn-primary">MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><img src="{{ url('/') }}/assets/images/code-man.jpg" class="card-img-top"></div>
                    <div class="card-block">
                        <h4 class="card-title">Unlimited Sites</h4>
                        <h5 class="card-subtitle">Mobirise gives you the freedom to develop</h5>
                        <p class="card-text">Mobirise gives you the freedom to develop as many websites as you like given the fact that it is a desktop app.</p>
                        <div class="card-btn"><a href="{{ url('/') }}" class="btn btn-primary">MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection