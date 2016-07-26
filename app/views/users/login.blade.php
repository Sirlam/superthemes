@extends('layouts.front.master')

@section('body')
<div id="maincontainer">
    <div class="container">
        <div class="span6 offset4">
        <h3 class="heading3">Returning Customer</h3>
              <div class="loginbox">
                <form class="form-vertical" method="post">
                <fieldset>
                    <div class="control-group">
                        <label for="email" class="control-label">E-Mail Address:</label>
                            <div class="controls">
                                <input id="email" name="email" type="email" class="span3">
                            </div>
                    </div>
                    <div class="control-group">
                        <label for="password" class="control-label">Password:</label>
                            <div class="controls">
                                <input id="password" name="password" type="password" class="span3">
                            </div>
                    </div>
                    <a href="{{url('remind')}}" class="">Forgotten Password?</a>
                    <p>Don't have an account? <a href="{{url('register')}}">Register here</a> </p>
                    <br>
                    <button type="submit" class="btn btn-success">Login</button>
                  </fieldset>
                </form>
              </div>
        </div>
    </div>
</div>

@stop