@extends('master')

@section('title', 'login')

@section('content')
{{-- 
{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}
 --}}
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">ورود</h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">پست الکترونیک</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">رمز عبور</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>ورود</span></button>
      </div>
      <div class="footer"><a href="#">رمز عبور را فراموش کرده ام</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">ثبت نام
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">پست الکترونیک</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">رمز عبور</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">تکرار رمز عبور</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>ثبت نام</span></button>
      </div>
    </form>
  </div>
</div>
@stop
