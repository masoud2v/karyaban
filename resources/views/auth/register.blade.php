@extends('layouts.app')

@section('head')
    {{ Html::style('css/registerstyle.css') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>{{ trans('blogwords.register') }}</h4>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(array('url' => '/register', 'class'=>'form-horizontal col-md-12')) }}
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('name', trans('blogwords.name'), array('class' => 'col-md-4 control-label')) }}
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6 col-md-offset-2">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('email', trans('blogwords.email'), array('class' => 'col-md-4 control-label')) }}
                        </div>

                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="text" class="form-control" name="tel" value="{{ old('tel') }}">

                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('tel', trans('blogwords.tel'), array('class' => 'col-md-4 control-label')) }}
                        </div>
                        <div class="form-group{{ $errors->has('corporation') ? ' has-error' : '' }}">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="text" class="form-control" name="tel" value="{{ old('corporation') }}">

                                @if ($errors->has('corporation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('corporation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('corporation', trans('blogwords.corporation'), array('class' => 'col-md-4 control-label')) }}
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('password', trans('blogwords.password'), array('class' => 'col-md-4 control-label')) }}
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('password_confirmation', trans('blogwords.password_confirmation'), array('class' => 'col-md-4 control-label')) }}
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-6">
                                <button type="submit" class="btn btn-primary">{{ trans('blogwords.register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
