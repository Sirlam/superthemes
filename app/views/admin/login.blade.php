<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A marketplace where themes and template designers meet">
    <meta name="author" content="Super Themes - superthemes.com">

    <title>Administration Panel</title>

    <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>

    {{HTML::style("css/bootstrap.css")}}
    {{HTML::style("css/bootstrap-responsive.css")}}
    {{HTML::style("css/docs.css")}}
    {{HTML::style("js/google-code-prettify/prettify.css")}}
    {{HTML::style("css/style.css")}}

    <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

    {{HTML::style("css/font-awesome.min.css")}}

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{{url('images/favicon.png')}}">
</head>

<body>

<div id="maincontainer">
    <div class="container">
        @if (Session::has('success'))
            <div class="container">
                <div class="alert alert-success"> {{ Session::get('success') }}</div>
            </div>
        @elseif (Session::has('fail'))
            <div class="container">
                <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
            </div>
        @endif
        <div class="span6 offset4">
        <h3 class="heading3">Admin Login</h3>
              <div class="loginbox">
                <form class="form-vertical" method="post" action="{{ URL::route('postAdminLogin')  }}">
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
                    <a href="{{url('remind')}}" class="">Forgotten Password?</a>
                    <br>
                    <button type="submit" class="btn btn-success">Login</button>
                  </fieldset>
                </form>
              </div>
        </div>
    </div>
</div>

</body>
</html>