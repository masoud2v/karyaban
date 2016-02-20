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
                        {{ Form::open(array('url' => '/cityinsert', 'class'=>'form-horizontal col-md-12')) }}
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6"></div>
                            <div class="col-md-3">
                                {{ Form::text('name', old('name'), array('class' => 'form-control')) }}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ Form::label('name', 'شهر', array('class' => 'col-md-3 control-label')) }}
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
