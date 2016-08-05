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
        <h3 class="heading3">Forgotten password</h3>
              <div class="loginbox">
                    <form action="{{ action('RemindersController@postRemind') }}" method="POST">
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
                    <button type="submit" class="btn btn-success">Send Reminder</button>
                  </fieldset>
                </form>
              </div>
        </div>
    </div>
</div>

@stop
