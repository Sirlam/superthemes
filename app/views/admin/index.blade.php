<!doctype html>
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
<div>
@if (Auth::check() && Auth::user()->isAdmin()))
<div class="container">
    <div class="accordion" id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                Categories
                </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                    <form class="form-vertical" action="#" method="post">
                        <div class="control-group {{ ($errors->has('name')) ? 'has-error' : ''}}">
                            <label for="name" class="control-label span3">Category Name:</label>
                                <div class="controls">
                                    <input id="name" name="name" type="text" class="span3">
                                    @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                    Products
                </a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                    <form class="form-vertical" action="#" method="post">
                        <div class="control-group {{ ($errors->has('title')) ? 'has-error' : ''}}">
                            <label for="title" class="control-label span3">Product Name:</label>
                                <div class="controls">
                                    <input id="title" name="title" type="text" class="span3">
                                    @if ($errors->has('title'))
                                        {{ $errors->first('title') }}
                                    @endif
                                </div>

                            <label for="cat_name" class="control-label span3">Category:</label>
                                <div class="controls">
                                    <input id="cat_name" name="cat_name" type="text" class="span3">
                                    @if ($errors->has('cat_name'))
                                        {{ $errors->first('cat_name') }}
                                    @endif
                                </div>

                            <label for="description" class="control-label span3">Description:</label>
                                <div class="controls">
                                    <textarea id="description" name="description" class="span3" rows="5"></textarea>
                                    @if ($errors->has('description'))
                                        {{ $errors->first('description') }}
                                    @endif
                                </div>

                            <label for="old_price" class="control-label span3">Old Price:</label>
                                <div class="controls">
                                    <input id="old_price" name="old_price" type="text" class="span3">
                                    @if ($errors->has('old_price'))
                                        {{ $errors->first('old_price') }}
                                    @endif
                                </div>

                            <label for="new_price" class="control-label span3">New Price:</label>
                                <div class="controls">
                                    <input id="new_price" name="new_price" type="text" class="span3">
                                    @if ($errors->has('new_price'))
                                        {{ $errors->first('new_price') }}
                                    @endif
                                </div>

                            <label for="image" class="control-label span3">Image:</label>
                                <div class="controls">
                                    <input id="image" name="image" type="file" class="span3">
                                    @if ($errors->has('image'))
                                        {{ $errors->first('image') }}
                                    @endif
                                </div>

                            <label for="file" class="control-label span3">File:</label>
                                <div class="controls">
                                    <input id="file" name="file" type="file" class="span3">
                                    @if ($errors->has('file'))
                                        {{ $errors->first('file') }}
                                    @endif
                                </div>

                        <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                    Users
                </a>
            </div>
            <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                    <form class="form-vertical" action="#" method="post">
                        <div class="control-group {{ ($errors->has('title')) ? 'has-error' : ''}}">
                            <label for="email" class="control-label span3">User email:</label>
                                <div class="controls">
                                    <input id="email" name="email" type="text" class="span3">
                                    @if ($errors->has('email'))
                                        {{ $errors->first('email') }}
                                    @endif
                                </div>

                        <button type="submit" class="btn btn-success">Remove</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{URL::route('getAdminLogout')}}" class="pull-right">Logout</a>
    @else
    <div class="container">
        <button class="btn btn-large"> <a href="{{URL::route('home')}}">Unauthorized, Get me out of here</a></button>
    </div>
</div>
@endif
</div>
{{HTML::script("js/jquery.js")}}
{{HTML::script("js/bootstrap-transition.js")}}
  {{HTML::script("js/bootstrap-alert.js")}}
  {{HTML::script("js/bootstrap-modal.js")}}
  {{HTML::script("js/bootstrap-dropdown.js")}}
  {{HTML::script("js/bootstrap-scrollspy.js")}}
  {{HTML::script("js/bootstrap-tab.js")}}
  {{HTML::script("js/bootstrap-tooltip.js")}}
  {{HTML::script("js/bootstrap-popover.js")}}
  {{HTML::script("js/bootstrap-button.js")}}
  {{HTML::script("js/bootstrap-collapse.js")}}
  {{HTML::script("js/bootstrap-carousel.js")}}
  {{HTML::script("js/bootstrap-typeahead.js")}}
  {{HTML::script("js/bootstrap-affix.js")}}
</body>
</html>