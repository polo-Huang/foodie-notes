@extends('layouts.admin')

@section('title')
    foodie-notes-manage
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('css/admin/index.css') }}">
    <link rel="stylesheet" href="{{ asset('dragula/dragula.css') }}">
    <script src="{{ asset('dragula/dragula.js') }}"></script>
    <script src="{{ asset('js/admin/index.js') }}"></script>
    <meta name="_token" content="{!! csrf_token() !!}"/>
@endsection

@section('content')
    <div class="admin_index">

        <input type="hidden" name="del_banner_confirm" value="确定要删除该banner">
        @include('flash::message')
        <div class="panel panel-default site_info margin-bottom-30">
            <div class="panel-heading">
                <span>网站信息&nbsp;Website Information</span>
                <span class="btn-cool pull-right btn_to_form"><i class="fa fa-pencil first"></i><i class="fa fa-check hidden"></i></span>
            </div>
            <div class="panel-body panel-show">
                <dl>
                    <dd>站名&nbsp;Site Name&nbsp;:&nbsp;&nbsp;<i>{{ $system->name }}</i></dd>
                    <dd>访问量&nbsp;Visitor Volume&nbsp;:&nbsp;&nbsp;<i>{{ $system->visitor_volume }}</i>&nbsp;<i class="fa fa-hand-o-down"></i></dd>
                </dl>
            </div>
            <div class="panel-body panel-form">
                <form name="system" method="post" action="{{ url('/admin/index/editSystem') }}">
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
            <div class="panel-body panel-show {{ $errors->has('path') ? ' hidden' : '' }}">
                <table>
                    <thead>
                        <tr class="title">
                            <td>#</td>
                            <td>img</td>
                            <td>position</td>
                            <td>action</td>
                        </tr>
                    </thead>
                    <tbody id="dragula_banner">
                    @foreach($banners as $key => $value)
                        <tr class="banner_element" banner_id="{{ $value->id }}">
                            <td>{{ $key + 1 }}</td>
                            <td><a href="{{ url('uploads/banners/'.$value->path) }}" target="_block"><img src="{{ $value->path }}"></a></td>
                            <td>{{ $value->position }}</td>
                            <td>
                                <a class="ajax-a btn_edit_banner"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                <a class="ajax-a btn_del_banner" banner_id="{{ $value->id }}"><i class="fa fa-trash-o"></i></a>&nbsp;&nbsp;&nbsp;
                                <a class="move-a"><i class="fa fa-sort" id="move-a"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="panel-body panel-form {{ $errors->has('path') ? ' show' : '' }}">
                <form name="system" method="post" action="{{ url('/admin/index/addBanner') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group row {{ $errors->has('path') ? ' has-error' : '' }}">
                        <label for="path" class="col-sm-3 control-label">横图&nbsp;Banner&nbsp;<span class="color-must">*</span></label>
                        <div class="col-sm-9">
                            <input name="path" type="file" id="file">
                            @if ($errors->has('path'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('path') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row {{ $errors->has('position') ? ' has-error' : '' }}">
                        <label for="position" class="col-sm-3 control-label">位置&nbsp;Position&nbsp;<span class="color-must">*</span></label>
                        <div class="col-sm-9">
                            @for($i = 1; $i - 1 <= $banners->count(); $i++)
                                {{ $i }}&nbsp;<input type="radio" name="position" value="{{ $i }}">&nbsp;
                            @endfor
                            @if ($errors->has('position'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('position') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <input type="submit" value="提交" class="form-submit">
                </form>
            </div>
        </div>

    </div>
@endsection