@extends('layouts.front.master')

@section('body')
@if (Session::has('success'))
        <div class="container">
            <div class="alert alert-success"> {{ Session::get('success') }}</div>
        </div>
    @elseif (Session::has('fail'))
        <div class="container">
            <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
        </div>
    @endif
<div id="maincontainer">
    <div class="container">
        <div class="span6 offset4">
        <h3 class="heading3">Returning Customer</h3>
              <div class="loginbox">
                <form class="form-vertical" method="post" action="{{ URL::route('postLogin')  }}">
                <fieldset>
                    <div class="control-group {{ ($errors->has('email')) ? 'has-error' : ''}}">
                        <label for="email" class="control-label">E-Mail Address:</label>
                            <div class="controls">
                                <input id="email" name="email" type="email" class="span3">
                                @if ($errors->has('email'))
                                            {{ $errors->first('email') }}
                                        @endif
                            </div>
                    </div>
                    <div class="control-group {{ ($errors->has('password')) ? 'has-error' : ''}}">
                        <label for="password" class="control-label">Password:</label>
                            <div class="controls">
                                <input id="password" name="password" type="password" class="span3">
                                @if ($errors->has('password'))
                                            {{ $errors->first('password') }}
                                        @endif
                            </div>
                    </div>
                     <div class="checkbox">
                            <label for="remember" ></label>
                            <input type="checkbox" name="remember" id="remember">
                                Remember me
                            </div>
                            {{ Form::token() }}
                    <a href="{{URL::route('getRemind')}}" class="">Forgotten Password?</a>
                    <p>Don't have an account? <a href="{{url('register')}}">Register here</a> </p>
                    <button type="submit" class="btn btn-success">Login</button>
                  </fieldset>
                </form>
              </div>
        </div>
    </div>
</div>

@stop