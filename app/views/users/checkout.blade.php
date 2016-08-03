@extends('layouts.front.master')

@section('body')


<!--Content starts-->
<div id="maincontainer">
	<section id="checkout">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a><span class="divider">/</span></li>
        <li class="active">Checkout</li>
      </ul>
      @if (Sizeof(Cart::content()) >=0)
      <h1 class="productname">You Are checking out {{ Cart::count() }} Themes</h1>
      @endif
      @if (!Auth::check())
      <div class="checkoutsteptitle">Step 1: Checkout Options<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep " style="display: none;">
            <section class="newcustomer ">
              <h3 class="heading3">New Customer </h3>
              <div class="loginbox">
                <label class="inline" for="registerAccount">
                  <input type="radio" name="option1" id="registerAccount">
                  Register Account </label>
                <br>
                <label class="inline" for="guestAccount">
                  <input type="radio" name="option1" id="guestAccount">
                  Guest Checkout </label>
                <p><br>
                  By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                <br>
                <p> click on continue to register a new account. Move on to step 2 to shop as a guest.</p>
                <a class="btn btn-success" href="{{url('register')}}">Register</a>
              </div>
            </section>
            <section class="returncustomer">
              <h3 class="heading3">Returning Customer </h3>
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
                                 <a href="{{url('remind')}}" class="">Forgotten Password?</a>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Login</button>
                  </fieldset>
                </form>
              </div>
            </section>
          </div>
          @else
          <div class='alert alert-success' >
          <h1> You are already logged in step 1 has been skipped</h1>
          <br>
          </div>
          @endif
          <div class="checkoutsteptitle">Step 2: Payment  Method<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep" style="display: none;">
            <p>Please select the preferred payment method to use on this order.</p>
            <label class=" inline">
              <input type="radio" value="option1" style="">
              Debit Card</label>
            <br>
            <label class=" inline">
             <input type="radio" value="option2" style="">
               Pay Pal</label>
             <br>
            <div class="pull-right">
              <a class="btn btn-success pull-right">Continue</a>
              <div class="privacy">I have read and agree to the <a href="#">Privacy Policy</a>
              </div>
            </div>
          </div>
          <div class="checkoutsteptitle down">Step 4: Confirm Order<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep" style="display: none;">
            <div class="cart-info">
                <table class="table table-striped table-bordered">
                  <tbody><tr>
                    <th width="14%" class="image">Image</th>
                    <th width="21%" class="name">Product Name</th>
                    <th width="14%" class="model">Model</th>
                    <!--<th width="12%" class="quantity">Quantity</th>-->
                    <th width="15%" class="price">Unit Price</th>
                   <!--<th width="13%" class="total">Total</th>-->
                    <th width="11%" class="Action">Edit</th>
                  </tr>
                  @if (sizeof(Cart::content())>0)
                                 @foreach (Cart::content() as $item)
                                <tr>
                                 <td class="image"><a href="#"><img width="30" height="30" src="{{url($item->product->image)}}" alt="product" title="product"></a></td>
                                  <td class="name">{{ $item->product->title }}</td>
                                  <td class="model">{{ $item->name }}</td>
                                  <!--<th class="quantity">Stock</th>-->
                                  <td class="price">{{ $item->price }}</td>
                                   <form method="post" action="{{URL::route('removeCart')}}">
                                   <input type="hidden" name="product_id" value="{{ $item->rowid }}">
                                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                   <td class="total"><a class="btn" href="#">Remove Item</a>
                                   <a href="{{ URL::route('removeCart') }}"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
                                    </form>
                                </tr>
                                @endforeach
                                @endif
                 <!--<tr>
                    <td class="image"><a href="#"><img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
                    <td class="name"><a href="#">Women Product</a></td>
                    <td class="model">LM - 501</td>
                    <td class="quantity"><input type="text" class="span1" name="quantity[40]" value="1" size="1"></td>
                    <td class="price">$120.68</td>
                    <td class="total">$120.68</td>
                    <td class="total"><a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
                  </tr>
                  <tr>
                    <td class="image"><a href="#"><img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
                    <td class="name"><a href="#">Kids Products</a></td>
                    <td class="model">LM - 501</td>
                    <td class="quantity"><input type="text" class="span1" name="quantity[40]" value="1" size="1"></td>
                    <td class="price">$120.68</td>
                    <td class="total">$120.68</td>
                    <td class="total"><a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
                  </tr>
                  <tr>
                    <td class="image"><a href="#"><img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
                    <td class="name"><a href="#">T-Shirt</a></td>
                    <td class="model">LM - 501</td>
                    <td class="quantity"><input type="text" class="span1" name="quantity[40]" value="1" size="1"></td>
                    <td class="price">$120.68</td>
                    <td class="total">$120.68</td>
                    <td class="total"><a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
                  </tr>-->
                </tbody></table>
              </div>
            <div class="row">
        <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              <tbody><tr>
                <td><span class="extra bold">Sub-Total :</span></td>
                <td><span class="bold">$101.0</span></td>
              </tr>
              <tr>
                <!--<td><span class="extra bold">Eco Tax (-2.00) :</span></td>
                <td><span class="bold">$11.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold">VAT (17.5%) :</span></td>
                <td><span class="bold">$21.0</span></td>
              </tr>
              <tr>-->
                <td><span class="extra bold totalamout">Total :</span></td>
                <td><span class="bold totalamout">{{ Cart::total() }}</span></td>
              </tr>
            </tbody></table><br>
            <a type="submit" class="btn btn-success pull-right" > Pay <a/>
            <a type="submit" href="{{url('/')}}" class="btn pull-right mr10"> Continue shopping<a/>
        </div>
      </div>
          </div>
     </div>
  </section>
</div>

@stop