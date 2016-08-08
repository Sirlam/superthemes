@extends('...layouts.front.master')

@section('body')

<!--Content starts-->

<div id="maincontainer">
	<!--Slider Starts-->
	@if (Session::has('success'))
            <div class="container">
                <div class="alert alert-success"> {{ Session::get('success') }}</div>
            </div>
        @elseif (Session::has('fail'))
            <div class="container">
                <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
            </div>
        @endif
    <!--Slider Ends-->
	<div class="container">
    <ul class="breadcrumb">
        <li>
          <a href="{{url('/')}}">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Contact</li>
      </ul>
		<div class="row">
        	<!--Sidebar Starts-->

			<div class="span3">
				<aside>
					<h1 class="headingfull"><span>Contact Us</span></h1>
					<div class="sidewidt p10">
						<p>Phone: (123) 456-7890<br>
                            Fax: (123) 456-7890<br>
                            Email: info@superthemes.com<br>
                            Web: www.superthemes.com<br>
                            <br>
                            Monday-Friday: 9am to 5pm<br>
                            Saturday: 10am to 2pm<br>
                            Sunday: Closed
                         </p>
					</div>
				</aside>

			</div>
            <!--sidebar Ends-->
            <div class="span9">
            <h1 class="productname">Leave a message</h1>
          <form method="post" class="form-horizontal contactform span5" novalidate="novalidate">
            <fieldset>
              <div class="control-group {{ ($errors->has('firstname')) ? 'has-error' : ''}}">
                <label class="control-label" for="firstname">Name <span class="required">*</span></label>
                <div class="controls">
                  <input type="text" name="firstname" id="firstname" class="required span3">
                    @if ($errors->has('firstname'))
                        {{ $errors->first('firstname') }}
                    @endif
                </div>
              </div>
              <div class="control-group {{ ($errors->has('email')) ? 'has-error' : ''}}">
                <label class="control-label" for="email">Email <span class="required">*</span></label>
                <div class="controls">
                  <input type="email" name="email" value="" id="email" class="required email span3">
                    @if ($errors->has('email'))
                        {{ $errors->first('email') }}
                    @endif
                </div>
              </div>
              <div class="control-group {{ ($errors->has('message')) ? 'has-error' : ''}}">
                <label class="control-label" for="message">Message <span class="required">*</span></label>
                <div class="controls">
                  <textarea name="message" id="message" cols="40" rows="6" class="required span3"></textarea>
                    @if ($errors->has('message'))
                        {{ $errors->first('message') }}
                    @endif
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" id="submit_id" value="Submit" class="btn btn-success">
                <input type="reset" value="Reset" class="btn">
              </div>
            </fieldset>
          </form>
        </div>
</div>
</div>
</div>

@stop