@extends('...layouts.front.master')

@section('body')

<!--Content starts-->

<div id="maincontainer">
	<!--Slider Starts-->

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

				<aside>
					<h1 class="headingfull"><span>Best Offer</span> </h1>
					<div class="sidewidt">
						<img alt="" src="{{url('images/adbanner2.jpg')}}">
					</div>
				</aside>
			</div>
            <!--sidebar Ends-->
            <div class="span9">
            <h1 class="productname">Contact Details</h1>
          <form method="post" class="form-horizontal contactform span5" novalidate="novalidate">
            <fieldset>
              <div class="control-group">
                <label class="control-label" for="name">Name <span class="required">*</span></label>
                <div class="controls">
                  <input type="text" name="name" value="" id="name" class="required span3">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="email">Email <span class="required">*</span></label>
                <div class="controls">
                  <input type="email" name="email" value="" id="email" class="required email span3">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="phone">Phone</label>
                <div class="controls">
                  <input type="text" name="phone" value="" id="phone" class="required span3">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="message">Message</label>
                <div class="controls">
                  <textarea name="message" id="message" cols="40" rows="6" class="required span3"></textarea>
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