@extends('layouts.front.master')

@section('body')
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
 <div class="span6 offset2">
<section id="featured">
     <form class="form-horizontal" method="post" action="{{ URL::route('postCardAuth')  }}" enctype="multipart/form-data">
            <h3 class="center">Your Transaction Details</h3>
            <div class="registerbox">
              <fieldset>
             <div class="control-group {{ ($errors->has('cardno')) ? 'has-error' : ''}}">
               <label for="cardnumber" class="control-label"><span class="red">*</span> Card Number:</label>
               <div class="controls">
                 <input id="cardnumber" name="cardno" type="text" class="input-xlarge">
             @if ($errors->has('cardno'))
             {{ $errors->first('cardno') }}
                         @endif
               </div>
             </div>
                <div class="control-group {{ ($errors->has('month')) ? 'has-error' : ''}} {{ ($errors->has('year')) ? 'has-error' : ''}}">
                  <label for="month" class="control-label"><span class="red">*</span> Expiry Month:</label>
                  <div class="controls">
                    <input id="month" name="month" type="month" class="input-xlarge">
                @if ($errors->has('month'))
                {{ $errors->first('month') }}
                            @endif
                  </div>
                </div>
               <!-- <div class="control-group {{ ($errors->has('year')) ? 'has-error' : ''}}">
                  <label for="year" class="control-label"><span class="red">*</span> Expiry Year:</label>
                  <div class="controls">
                    <input id=year" name="year" type="text" class="input-xlarge">
                  </div>
                </div>-->
                <div class="control-group {{ ($errors->has('cvv')) ? 'has-error' : ''}}">
                  <label for="cv2" class="control-label"><span class="red">*</span> CVV/CV2:</label>
                  <div class="controls">
                    <input id="cv2" name="cvv" type="password" class="input-xlarge">
                @if ($errors->has('cvv'))
                {{ $errors->first('cvv') }}
                            @endif
                  </div>
                  </div>
                <div class="control-group {{ ($errors->has('pin')) ? 'has-error' : ''}}">
                  <label for="cardpin" class="control-label">Card Pin:</label>
                  <div class="controls">
                    <input id="cardpin" name="pin" type="password"  class="input-xlarge">
                @if ($errors->has('pin'))
                {{ $errors->first('pin') }}
                            @endif
                  </div>
                </div>
                </fieldset>
                </div>
                <fieldset >
                <div class="control-group"{{ ($errors->has('amount')) ? 'has-error' : ''}}>
                  <label for="amount" class="control-label"><span class="red">*</span> Amount:</label>
                  <div class="controls">
                    <input id="amount" name="amount" type="text" value="{{ Cart::total() }}" class="input-xlarge" readonly>
                            @if ($errors->has('amount'))
                            {{ $errors->first('amount') }}
                            @endif
                  </div>
                </div>
                <div class="control-group {{ ($errors->has('description')) ? 'has-error' : ''}}">
                  <label for="description" class="control-label"><span class="red">*</span> Payment Narration:</label>
                  <div class="controls">
                    <input id="description" name="narration" type="text" class="input-xlarge">
                            @if ($errors->has('description'))
                            {{ $errors->first('description') }}
                                 @endif
                  </div>
                </div>
            <div class="registerbox">
                  {{ Form::token() }}
                <div class="control-group offset1">
              <input type="Submit" value="Continue" class="btn btn-success">
            </div>
            </div>
            </fieldset>
            </form>
          <div class="clearfix"></div>
  </section>
    </div>
</div>
</div>
</div>
@stop