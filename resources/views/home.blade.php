@extends('layouts.common')

@section('title')
    foodie-notes
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            polo is super man.
        </div>
    </div>
    @include('layouts.footer')
@endsection