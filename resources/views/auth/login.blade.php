@extends('layouts.app')

@section('head')
{{ Html::style('css/loginstyle.css') }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('blogwords.login') }}</div>
                <div class="panel-body">
                    <form class="form-horizontal col-md-12" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-3">
                            </div>
    
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label class="col-md-3 control-label">{{ trans('blogwords.email') }}</label>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-3 col-md-offset-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label class="col-md-3 control-label">{{ trans('blogwords.password') }}</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-9">
                                <div class="checkbox" >
                                    <input id="checkbox1" type="checkbox" class="checkbox pull-right" name="remember">
                                    <label for="checkbox1" class="control-label">{{ trans('blogwords.remember_me') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-6">

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">{{ trans('blogwords.forgetpassword') }}</a>
                                <button type="submit" class="btn btn-primary">{{ trans('blogwords.login') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
