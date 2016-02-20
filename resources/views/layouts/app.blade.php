<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ trans('blogwords.app_title') }}</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {{ Html::style('css/appstyle.css') }}

    <style>
        .fa-btn {
            margin-right: 6px;
        }

        .form-horizontal {
            float: right;
        }

        .form-horizontal .control-label {
            text-align: right;
        }

        .form-control {
            margin: 0 20px;
        }
    </style>

    @yield('head')
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">


        {{--<div class="collapse navbar-collapse pull-left" id="app-navbar-collapse">--}}
        {{--<!-- Left Side Of Navbar -->--}}
        {{--<ul class="nav navbar-nav">--}}
        {{--<li><a href="{{ url('/insert') }}">{{ trans('blogwords.insert') }}</a></li>--}}
        {{--</ul>--}}

                <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">{{ trans('blogwords.login') }}</a></li>
                <li><a href="{{ url('/register') }}">{{ trans('blogwords.register') }}</a></li>
                <li><a href="{{ url('/insert') }}">{{ trans('blogwords.insert') }}</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="caret">  </span>  {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/insert') }}">{{ trans('blogwords.insert') }}</a></li>
                {{--<li>{{Auth::getSession() }}</li>--}}
                {{--<li></li>{{ dd($session) }}</li>--}}
            @endif
        </ul>
    {{--</div>--}}

    <div class="navbar-header pull-right">
        <!-- Branding Image -->

        <a class="navbar-brand pull-right" href="{{ url('/') }}">
            {{ trans('blogwords.app_title') }}
        </a>
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>

    </div>
</nav>

@yield('content')

<footer>
    <div class="footer">
        <div class="container">
            <div class="col-sm-4">
                <div class="info">
                    <p class="infotitle">
                        {{ trans('blogwords.contact_information') }}
                    </p>
                    <p class="infoemail">
                        <span class="pull-left">info@karyaban.ir</span>{{ trans('blogwords.email') }}<i
                                class="fa fa-envelope fa-lg"></i>
                    </p>
                    <p class="infotel">
                        <span class="job-date">09371009016</span>{{ trans('blogwords.contact_tel') }}<i
                                class="fa fa-phone fa-lg"></i>
                    </p>
                    <div class="wrapper">
                        <div class="social fb">&#62220;</div>
                        <div class="social tw">&#62217;</div>
                        <div class="social gp">&#62223;</div>
                        <div class="social in">&#62232;</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="about">
                    <h4 class="about_title">{{ trans('blogwords.about') }}</h4>
                    <p>{{ trans('blogwords.about_text') }}</p>
                    <p>{{ trans('blogwords.about_text2') }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{ URL::to('js/number.js') }}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
