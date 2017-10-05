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
                <div class="item active">
                    <img src="{{ url('/uploads/banners/1.png') }}" alt="First slide">
                    <!-- <div class="carousel-caption">标题 1</div> -->
                </div>
                <div class="item">
                    <img src="{{ url('/uploads/banners/2.png') }}" alt="Second slide">
                    <!-- <div class="carousel-caption">标题 2</div> -->
                </div>
                <div class="item">
                    <img src="{{ url('/uploads/banners/3.png') }}" alt="Third slide">
                    <!-- <div class="carousel-caption">标题 3</div> -->
                </div>
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
            <div class="one">
                <img class="restaurants-icon center-block" src="{{ url('/image/restaurant-icon.png') }}">
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection