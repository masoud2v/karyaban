@extends('layouts.app')

@section('head')
    {{ Html::style('css/showstyle.css') }}
@endsection

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>{{ trans('blogwords.job_show_heading') }}</h4>
            </div>
            <div class="panel-body job-detail">
                <div class="row">
                    <div class="col-md-2">
                        <p class="job-date">{{ $job->created_at }}</p>
                    </div>
                    <p class="col-md-6 col-md-offset-3">{{ $job->title }}</p>
                    <h5 class="col-md-1">{{ ': '.trans('blogwords.job_title') }}</h5>
                </div>
                <div class="row">
                    <p class="col-md-6 col-md-offset-5">{{ $job->text }}</p>
                    <h5 class="col-md-1">{{ ': '.trans('blogwords.job_text') }}</h5>
                </div>
                <br><br>
                <div class="row">
                    <p class="col-md-2">{{ $job->city }}</p>
                </div>
                @if($delete)
                    <div class="row">
                        {{ Form::open(array('url' => '/job/'. trans($job->id), 'class'=>'form-horizontal col-md-12 showform')) }}
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-9">
                                {{ Form::submit(trans('blogwords.job_delete'), array('class' => 'btn btn-primary col-md-3')) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                @endif
                <div class="introduce">
                </div>
            </div>
        </div>
    </div>
@endsection