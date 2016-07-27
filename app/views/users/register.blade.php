@extends('layouts.front.master')

@section('body')

<div id="maincontainer">
	<!--Slider Starts-->

    <!--Slider Ends-->
	<div class="container">
    <ul class="breadcrumb">
        <li>
          <a href="{{url('/')}}">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Register</li>
      </ul>
		<div class="row">
        	<!--Sidebar Starts-->

			<div class="span3">
				<aside>
					<h1 class="headingfull"><span>Options</span></h1>
					<div class="sidewidt">
						<ul class="nav nav-list categories">
                            <li><a href="{{url('login')}}">Login</a></li>
							<li><a href="{{url('remind')}}">Forgotten Password</a></li>
							<li><a href="{{url('account')}}">My Account</a></li>
							<li><a href="{{url('wishlist')}}">Wishlist</a></li>
                            <li><a href="{{url('reset')}}">Reset Password</a></li>
						</ul>
					</div>
				</aside>
				<aside>
       			 <h1 class="headingfull"><span>Best Seller</span></h1>
          			<div class="sidewidt">
           			 <ul class="bestseller">
             			 <li>
                            <img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product">
                            <a class="productname" href="{{url('productt')}}"> Product Name</a>
                            <span class="procategory">WordPress</span>
                            <span class="price">$250</span>
                          </li>
                          <li>
                            <img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product">
                            <a class="productname" href="{{url('product')}}"> Product Name</a>
                            <span class="procategory">Drupal</span>
                            <span class="price">$250</span>
                          </li>
                          <li>
                            <img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product">
                            <a class="productname" href="{{url('product')}}"> Product Name</a>
                            <span class="procategory">Joomla</span>
                            <span class="price">$250</span>
                          </li>
                        </ul>
                      </div>
                   </aside>
				<aside>
					<h1 class="headingfull"><span>Best Offer</span> </h1>
					<div class="sidewidt">
						<img alt="" src="{{url('images/adbanner2.jpg')}}">
					</div>
				</aside>
			</div>
            <!--sidebar Ends-->
            <div class="span9">
  <!-- Featured Product-->

  <section id="featured">
    <h1 class="productname">Register Account</h1>
    <p> If you already have an account with us, please <a href="{{url('postLogin')}}">login</a> here.</p>

     <form class="form-horizontal" method="post" action="{{ URL::route('postRegister')  }}" enctype="multipart/form-data">
            <h3 class="heading3">Your Personal Details</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group {{ ($errors->has('firstname')) ? 'has-error' : ''}}">
                  <label for="firstname" class="control-label"><span class="red">*</span> First Name:</label>
                  <div class="controls">
                    <input id="firstname" name="firstname" type="text" class="input-xlarge">
                    @if ($errors->has('firstname'))
                                {{ $errors->first('firstname') }}
                            @endif
                  </div>
                </div>
                <div class="control-group {{ ($errors->has('lastname')) ? 'has-error' : ''}}">
                  <label for="lastname" class="control-label"><span class="red">*</span> Last Name:</label>
                  <div class="controls">
                    <input id="lastname" name="lastname" type="text" class="input-xlarge">
                    @if ($errors->has('lastname'))
                                {{ $errors->first('lastname') }}
                            @endif
                  </div>
                </div>
                <div class="control-group {{ ($errors->has('email')) ? 'has-error' : ''}}">
                  <label for="email" class="control-label"><span class="red">*</span> Email:</label>
                  <div class="controls">
                    <input id="email" name="email" type="email" class="input-xlarge">
                    @if ($errors->has('email'))
                                {{ $errors->first('email') }}
                            @endif
                  </div>
                </div>
                <div class="control-group {{ ($errors->has('phone')) ? 'has-error' : ''}}">
                  <label for="phone" class="control-label"><span class="red">*</span> Phone:</label>
                  <div class="controls">
                    <input id="phone" name="phone" type="text" class="input-xlarge">
                    @if ($errors->has('phone'))
                                {{ $errors->first('phone') }}
                            @endif
                  </div>
                </div>
                <div class="control-group {{ ($errors->has('address')) ? 'has-error' : ''}}">
                  <label for="address" class="control-label"> Address:</label>
                  <div class="controls">
                    <textarea id="address" name="address" rows="5" class="input-xlarge"></textarea>
                    @if ($errors->has('address'))
                                {{ $errors->first('address') }}
                            @endif
                  </div>
                </div>
              </fieldset>
            </div>
            <hr>
            <h3 class="heading3">Your Password</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group"{{ ($errors->has('password')) ? 'has-error' : ''}}>
                  <label for="password" class="control-label"><span class="red">*</span> Password:</label>
                  <div class="controls">
                    <input id="password" name="password" type="password" class="input-xlarge">
                    @if ($errors->has('password'))
                                {{ $errors->first('password') }}
                            @endif
                  </div>
                </div>
                <div class="control-group {{ ($errors->has('confirm_password')) ? 'has-error' : ''}}">
                  <label for="confirm_password" class="control-label"><span class="red">*</span> Password Confirm:</label>
                  <div class="controls">
                    <input id="password" name="confirm_password" type="password" class="input-xlarge">
                    @if ($errors->has('confirm_password'))
                                 {{ $errors->first('confirm_password') }}
                                 @endif
                  </div>
                </div>
              </fieldset>
            </div>
            <hr>
            <h3 class="heading3">Newsletter</h3>
            <div class="registerbox">
              <fieldset>
              {{ Form::token() }}
                <div class="control-group">
                  <div class="controls">
                    <label class="checkbox inline">
                      <input type="checkbox" value="option1">
                      Subscribe to our newsletter </label>
                  </div>
                </div>
              </fieldset>
            </div>
            <div>
              <label class="checkbox inline">
                <input type="checkbox" value="option2">
                I have read and agree to the <a href="#">Privacy Policy</a>
              </label>

              <input type="Submit" value="Continue" class="btn btn-success">
            </div>
          </form>
          <div class="clearfix"></div>
  </section>
</div>
</div>
</div>
</div>

@stop