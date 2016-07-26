@extends('layouts.front.master')

@section('body')

<!--Content starts-->
<div id="maincontainer">
	<!--Slider Starts-->
	<section class="slider">
		<div class="container">
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="{{url('images/banner1.jpg')}}" data-thumb="images/banner1.jpg" alt="" />
					<img src="{{url('images/banner2.jpg')}}" data-thumb="images/banner2.jpg" alt="" />
					<img src="{{url('images/banner3.jpg')}}" data-thumb="images/banner3.jpg" alt="" data-transition="slideInLeft" />
				</div>
				<div id="htmlcaption" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with
					<a href="#">a link</a>
                </div>
			</div>
		</div>
	</section>
    <!--Slider Ends-->
	<div class="container">
		<div class="row">
        	<!--Sidebar Starts-->
			<div class="span3">
				<aside>
					<h1 class="headingfull"><span>Categories</span></h1>
					<div class="sidewidt">
						<ul class="nav nav-list categories">
							<li><a href="{{url('wordpress')}}">WordPress</a></li>
							<li><a href="{{url('bootstrap')}}">Bootstrap</a></li>
							<li><a href="{{url('joomla')}}">Joomla</a></li>
							<li><a href="{{url('drupal')}}">Drupal</a></li>
							<li><a href="{{url('blogger')}}">Blogger</a></li>
						</ul>
					</div>
				</aside>
				<aside>
       			 <h1 class="headingfull"><span>Best Seller</span></h1>
          			<div class="sidewidt">
           			 <ul class="bestseller">
             			 <li>
                            <img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product">
                            <a class="productname" href="{{url('product')}}"> Product Name</a>
                            <span class="procategory">WordPress</span>
                            <span class="price">$250</span>
                          </li>
                          <li>
                            <img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product">
                            <a class="productname" href="{{url('product')}}"> Product Name</a>
                            <span class="procategory">Joomla</span>
                            <span class="price">$250</span>
                          </li>
                          <li>
                            <img width="50" height="50" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product">
                            <a class="productname" href="{{url('product')}}"> Product Name</a>
                            <span class="procategory">Blogger</span>
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
    <h1 class="headingfull"><span>Featured Products</span></h1>
    <div class="sidewidt">
      <ul class="thumbnails">
        <li class="span3">
          By<a href="#"> design_spot</a>
          <div class="thumbnail">
            <span class="sale tooltip-test" data-original-title="">Sale</span>
            <a href="{{url('product')}}"><span><span><img alt="" src="{{url('images/product-l2.jpg')}}" width="240"></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a class="btn pull-right" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a href="{{url('product')}}" class="info">info</a>
                        <a href="{{url('wishlist')}}" class="wishlist">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          By<a href="#"> design_spot</a>
          <div class="thumbnail">
            <a href="{{url('product')}}"><span><span><img alt="" src="{{url('images/product-l1.jpg')}}" width="240"></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a class="btn pull-right" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a href="{{url('product')}}" class="info">info</a>
                        <a href="{{url('wishlist')}}" class="wishlist">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          By<a href="#"> design_spot</a>
          <div class="thumbnail">
            <span class="offer tooltip-test" data-original-title="">Offer</span>
            <a href="{{url('product')}}"><span><span><img alt="" src="{{url('images/product-l1.jpg')}}" width="240"></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a class="btn pull-right" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a href="{{url('product')}}" class="info">info</a>
                        <a href="{{url('wishlist')}}" class="wishlist">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          By<a href="#"> design_spot</a>
          <div class="thumbnail">
            <a href="{{url('product')}}"><span><span><img alt="" src="{{url('images/product-l3.jpg')}}" width="240"></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a class="btn pull-right" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a href="{{url('product')}}" class="info">info</a>
                        <a href="{{url('wishlist')}}" class="wishlist">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          By<a href="#"> design_spot</a>
          <div class="thumbnail">
            <span class="sale tooltip-test" data-original-title="">Sale</span>
            <a href="{{url('product')}}"><span><span><img alt="" src="{{url('images/product-l1.jpg')}}" width="240"></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a class="btn pull-right" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a href="{{url('product')}}" class="info">info</a>
                        <a href="{{url('wishlist')}}" class="wishlist">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          By<a href="#"> design_spot</a>
          <div class="thumbnail">
            <span class="sale tooltip-test" data-original-title="">Sale</span>
            <a href="{{url('product')}}"><span><span><img alt="" src="{{url('images/product-l2.jpg')}}" width="240"></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a class="btn pull-right" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a href="{{url('product')}}" class="info">info</a>
                        <a href="{{url('wishlist')}}" class="wishlist">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
</div>
</div>
</div>
</div>

@stop