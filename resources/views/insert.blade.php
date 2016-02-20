@extends('layouts.app')

@section('head')
    {{ Html::style('css/insertstyle.css') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('blogwords.insert') }}</div>
                    <div class="panel-body">
                        {{ Form::open(array('url' => '/insert', 'class'=>'form-horizontal col-md-12')) }}
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="col-md-6"></div>
                            <div class="col-md-3">
                                {{ Form::text('title', old('title'), array('class' => 'form-control')) }}

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('title', trans('blogwords.job_title'), array('class' => 'col-md-3 control-label')) }}
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                {{ Form::email('email', old('email'), array('class' => 'form-control')) }}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('email', trans('blogwords.email'), array('class' => 'col-md-3 control-label')) }}
                        </div>
                        <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                {{ Form::text('text', old('text'), array('class' => 'form-control')) }}

                                @if ($errors->has('text'))
                                    <span class="help-block">
                                        {{ $errors->first('text') }}
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('text', trans('blogwords.job_text'), array('class' => 'col-md-3 control-label')) }}
                        </div>
                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <div class="col-md-6"></div>

                            <div class="col-md-3">
                                {{ Form::number('tel', old('tel'), array('class' => 'form-control')) }}

                                @if ($errors->has('tel'))
                                    <span class="help-block pull-right">
                                        {{ $errors->first('tel') }}
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('tel', trans('blogwords.job_tel'), array('class' => 'col-md-3 control-label')) }}
                        </div>
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <div class="col-md-6"></div>

                            <div class="col-md-3">
                                {{ Form::select('city', $cities) }}

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('city', trans('blogwords.job_city'), array('class' => 'col-md-3 control-label')) }}
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-6">
                                {{ Form::submit(trans('blogwords.job_save'), array('class' => 'btn btn-primary col-md-3')) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
