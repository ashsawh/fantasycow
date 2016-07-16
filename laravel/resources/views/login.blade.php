@extends('layouts.master')

@section('title', 'Fantasy Cow: Sign In')

@section('body')
<div class="container">
  <div class="row">

    <div class="main">

      <h3>Please Log In, or <a href="#">Sign Up</a></h3>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>

      {{ Form::open([ 'action' => 'Auth\AuthController@login', 'method' => 'POST' ]) }}
        {{ Form::bsText('inputUsernameEmail', 'Username or Email') }}
        <div class="form-group">
          <a class="pull-right" href="#">Forgot password?</a>
          {{ Form::label('inputPassword', 'Password') }}
          {{ Form::password('inputPassword', [ 'id' => 'inputPassword', 'class' => 'form-control' ]) }}
        </div>
        <div class="checkbox pull-right">
          <label>
            {{ Form::checkbox('rememberMe', '',true) }}
            Remember me </label>
        </div>
        {{ Form::submit('Log In', [ 'class' => 'btn btn btn-primary localLoginBtn' ]) }}
      {{ Form::close() }}

    </div>

  </div>
</div>


@endsection
