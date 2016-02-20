@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row add-row">
            <div class="col-sm-2">
                <a target="_blank" href="" >
                    <img src="image/00903223.gif">
                </a>
            </div>
            <div class="add col-sm-8">
                <div class="banner">
                    <a target="_blank" href="" >
                        <img src="image/10739.gif">
                    </a>
                </div>
            </div>
            <div class="col-sm-2">
                <a target="_blank" href="" >
                    <img src="image/00903687.gif">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="telegram_channel">
                    <img class="android pull-left" src="image/android.png">
                    <a target="_blank" href="http://telegram.me/karyabantelegram"><img class="pull-left"
                                                                                       src="image/telegram_banner.png"></a>
                </div>
                <div class="enemad pull-left">
                    <img class="pull-right" src="image/logo.png">
                </div>
            </div>
            <div class="col-sm-8">
                @foreach ($jobs as $job)
                    <div class="row col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-sm-2">
                                    <p class="job-date">{{ $job->created_at }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <a rel="bookmark" class="job-city" title=""
                                       href="{{ URL::to('/city/' . $job->city) }}">{{ $job->city }}</a>
                                </div>
                                <div class="col-sm-7 job-title">
                                    <a rel="bookmark" class="job-title" target="_blank" title=""
                                       href="{{ URL::to('/job/' . $job->id) }}">{{ $job->title }}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="city-panel col-sm-2">
                <div class="city-panel-header">{{ trans('blogwords.city_title') }}</div>
                <div class="city-panel-content">
                    <ul>
                        @foreach ($cities as $city)
                            <li><a href="{{ URL::to('city/' . trans($city->name)) }}" target="_blank">{{ trans($city->name) }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
