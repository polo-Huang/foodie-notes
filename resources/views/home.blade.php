@extends('layouts.common')

@section('title')
    foodie-notes
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="home">
        <div id="myCarousel" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
            @foreach($banners as $key => $value)
                <div class="item @if($key == '1') active @endif">
                    <img src="{{ url('/uploads/banners/'.$value->path) }}" alt="First slide">
                    <!-- <div class="carousel-caption">标题 1</div> -->
                </div>
            @endforeach
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="carousel-control" href="#myCarousel" 
                data-slide="prev">
            </a>
            <a class="carousel-control slide_right" href="#myCarousel" 
                data-slide="next">
            </a>
        </div>
        <div class="restaurants">
        @foreach($stores as $key => $value)
            <div class="one">
                <img class="restaurants-icon center-block" src="{{ url('/image/restaurant-icon.png') }}">
                <p>{{ $value->name }}</p>
            </div>
        @endforeach
        </div>
    </div>
    @include('layouts.footer')
@endsection