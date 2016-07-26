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
      <h1 class="productname">Summer Offer Best Product (5)</h1>
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
                <a class="btn btn-success" href="#">Continue</a>
              </div>
            </section>
            <section class="returncustomer">
              <h3 class="heading3">Returning Customer </h3>
              <div class="loginbox">
                <form class="form-vertical">
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
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Login</button>
                  </fieldset>
                </form>
              </div>
            </section>
          </div>
          <div class="checkoutsteptitle">Step 2: Personal Details<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep" style="display: none;">
            <div class="row">
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                  <div class="span4">
                    <div class="control-group">
                      <label for="firstname" class="control-label">First Name<span class="red">*</span></label>
                      <div class="controls">
                        <input id="firstname" name="firstname" type="text" value="" class="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="lastname" class="control-label">Last Name<span class="red">*</span></label>
                      <div class="controls">
                        <input id="lastname" name="lastname" type="text" value="" class="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="email" class="control-label">E-Mail<span class="red">*</span></label>
                      <div class="controls">
                        <input id="email" name="email" type="email" value="" class="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="phone" class="control-label">Phone<span class="red">*</span></label>
                      <div class="controls">
                        <input id="phone" name="phone" type="text" value="" class="">
                      </div>
                    </div>
                  </div>
                  <div class="span4">
                    <div class="control-group">
                      <label for="address" class="control-label">Address</label>
                      <div class="controls">
                        <textarea id="address" name="address" rows="3" class=""></textarea>
                      </div>
                    </div>
                    <div class="control-group">
                        <label for="password2" class="control-label">Password<span class="red">*</span></label>
                        <div class="controls">
                            <input id="password2" name="password2" type="text" value="" class="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cPassword2" class="control-label">Password Confirm<span class="red">*</span></label>
                        <div class="controls">
                            <input id="cPassword2" name="cPassword2" type="text" value="" class="">
                        </div>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
            <a class="btn btn-success pull-right">Continue</a>
          </div>
          <div class="checkoutsteptitle">Step 3: Payment  Method<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep" style="display: none;">
            <p>Please select the preferred payment method to use on this order.</p>
            <label class=" inline">
              <input type="radio" value="option1" style="">
              Cash On Delivery</label>
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
                    <th width="12%" class="quantity">Quantity</th>
                    <th width="15%" class="price">Unit Price</th>
                    <th width="13%" class="total">Total</th>
                    <th width="11%" class="total">Edit</th>
                  </tr>
                  <tr>
                    <td class="image"><a href="#"><img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
                    <td class="name"><a href="#">Men Product</a></td>
                    <td class="model">LM - 501</td>
                    <td class="quantity"><input type="text" class="span1" name="quantity[40]" value="1" size="1"></td>
                    <td class="price">$120.68</td>
                    <td class="total">$120.68</td>
                    <td class="total"><a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
                  </tr>
                  <tr>
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
                  </tr>
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
                <td><span class="extra bold">Eco Tax (-2.00) :</span></td>
                <td><span class="bold">$11.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold">VAT (17.5%) :</span></td>
                <td><span class="bold">$21.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold totalamout">Total :</span></td>
                <td><span class="bold totalamout">$120.68</span></td>
              </tr>
            </tbody></table><br>
            <input type="submit" class="btn btn-success pull-right" value="CheckOut">
            <input type="submit" class="btn pull-right mr10" value="Continue Shopping">
          </div>
        </div>
      </div>
          </div>
     </div>
  </section>
</div>

@stop