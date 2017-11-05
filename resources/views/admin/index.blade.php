@extends('layouts.admin')

@section('title')
    foodie-notes-manage
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('css/admin/index.css') }}">
@endsection

@section('content')
    <div class="admin_index">

        @include('flash::message')
        <div class="panel panel-default site_info margin-bottom-30">
            <div class="panel-heading">
                <span>网站信息&nbsp;Website Information</span>
                <span class="btn-cool pull-right btn_to_form"><i class="fa fa-pencil first"></i><i class="fa fa-check hidden"></i></span>
            </div>
            <div class="panel-body panel_show">
                <dl>
                    <dd>站名&nbsp;Site Name&nbsp;:&nbsp;&nbsp;<i>{{ $system->name }}</i></dd>
                    <dd>访问量&nbsp;Visitor Volume&nbsp;:&nbsp;&nbsp;<i>{{ $system->visitor_volume }}</i>&nbsp;<i class="fa fa-hand-o-down"></i></dd>
                </dl>
            </div>
            <div class="panel-body panel_form">
                <form name="system" method="post" action="{{ url('/admin/editSystem') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 input-label">站名&nbsp;Site Name&nbsp;<span class="color-must">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="{{ $system->name }}" class="form-input">
                        </div>
                    </div>
                    <input type="submit" value="提交" class="form-submit">
                </form>
            </div>
        </div>

        <div class="panel panel-default banners margin-bottom-30">
            <div class="panel-heading">
                <span>首页展示图&nbsp;Banner</span>editSystem
                <span class="btn-cool pull-right btn_to_form"><i class="fa fa-plus first"></i><i class="fa fa-check hidden"></i></span>
            </div>
            <div class="panel-body panel_show">
                <table>
                    <tr class="title">
                        <td>#</td>
                        <td>img</td>
                        <td>position</td>
                        <td>action</td>
                    </tr>
                    @foreach($banners as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><a href="{{ url('uploads/banners/'.$value->path) }}" target="_block"><img src="{{ url('uploads/banners/'.$value->path) }}"></a></td>
                        <td>{{ $value->position }}</td>
                        <td><a class="" href=""><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a class="" href=""><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="panel-body panel_form">
                <form name="system" method="post" action="{{ url('/admin/addBanner') }}">
                    <div class="form-group row">
                        <label for="path" class="col-sm-3 input-label">横图&nbsp;Banner&nbsp;<span class="color-must">*</span></label>
                        <div class="col-sm-9">
                            <input name="path" type="file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-sm-3 input-label">位置&nbsp;Position&nbsp;<span class="color-must">*</span></label>
                        <div class="col-sm-9">
                        @for($i = 1; $i - 1 <= $banners->count(); $i++)
                            {{ $i }}&nbsp;<input type="radio" name="position" value="{{ $i }}">&nbsp;
                        @endfor
                        </div>
                    </div>
                    <input type="submit" value="提交" class="form-submit">
                </form>
            </div>
        </div>

    </div>
@endsection