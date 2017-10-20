@extends('layouts.admin')

@section('title')
    foodie-notes-manage
@endsection

@section('link')
    <!-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> -->
@endsection

@section('content')
    <div class="admin_index">
        <div class="container">
            <div class="row site_info margin-bottom-30">
                <dl>
                    <dt><h1>Foodie Notes</h1></dt>
                    <dd>Site Name:&nbsp;&nbsp;<i>Foodie Notes</i></dd>
                    <dd>Visitor Volume:&nbsp;&nbsp;<i>12423324</i>&nbsp;<i class="fa fa-hand-o-down"></i></dd>
                    <dd>Visitor Volume:&nbsp;&nbsp;<i>12423324</i>&nbsp;<i class="fa fa-hand-o-down"></i></dd>
                    <dd>Visitor Volume:&nbsp;&nbsp;<i>12423324</i>&nbsp;<i class="fa fa-hand-o-down"></i></dd>
                    <dd>Visitor Volume:&nbsp;&nbsp;<i>12423324</i>&nbsp;<i class="fa fa-hand-o-down"></i></dd>
                </dl>
            </div>
            <!-- <hr> -->
            <div class="row index_cards">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a class="btn-card" href="">banner</a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a class="btn-card" href="">banner</a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a class="btn-card" href="">banner</a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a class="btn-card" href="">banner</a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection