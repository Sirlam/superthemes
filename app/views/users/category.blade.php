@extends('...layouts.front.master')

@section('body')

<!--Content starts-->
<div id="maincontainer">
	<!--Slider Starts-->
	<!--<section class="slider">
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
@if (Session::has('success'))
        <div class="container">
            <div class="alert alert-success"> {{ Session::get('success') }}</div>
        </div>
    @elseif (Session::has('fail'))
        <div class="container">
            <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
        </div>
    @endif
        	<!--Sidebar Starts-->
			<div class="span3">
				<aside>
					<h1 class="headingfull"><span>Categories</span></h1>
					<div class="sidewidt">
						<ul class="nav nav-list categories">
						@foreach($categories as $category)
							<li><a href="{{url('category/'.$category->id)}}">{{ $category->name }}</a></li>
						@endforeach
						</ul>
					</div>
				</aside>
				<aside>
       			 <h1 class="headingfull"><span>Best Seller</span></h1>
          			<div class="sidewidt">
          			@foreach ($prods as $prod)
                      @if ($prod->id >= 3 && $prod->id <= 5)
           			 <ul class="bestseller">
             			 <li>
                            <img width="50" height="50" src="{{url($prod->image)}}" alt="product" title="product">
                            <a class="productname" href="{{url('product')}}"> {{ $prod->title }}</a>
                            @foreach($categories as $category)
                            @if ($category->id ==$prod->category_id)
                            <span class="procategory">{{ $category->name }}</span>
                            @endif
                            @endforeachh
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
    <h1 class="headingfull" id="center"><span>{{ $cat->name }} Category</span></h1>
    <div class="sidewidt">
      <ul class="thumbnails">
          @foreach ($products as $product)
        <li class="span3">
      @foreach($users as $user)
        @if ($user->id ==$product->user_id)
          By  <a href="#">  {{ $user->firstname }}</a>
        @endif
      @endforeach
          <div class="thumbnail">
            <span class="sale tooltip-test" data-original-title="">Featured</span>
            <a href="{{url('product/'.$product->id)}}"><span><span><img alt="" src="{{url($product->image)}}" width="240"></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
              @if($product->old_price!== null)
                <span class="oldprice">{{ $product->old_price }}</span>
              @endif
                <span class="newprice">{{ $product->new_price }}</span>
              </div>
              <form method="post" action="{{URL::route('addCart')}}">
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              @foreach ($categories as $category)
              @if ($category->id == $product->category_id)
              <input type="hidden" name="category_id" value="{{ $category->id }}">
              @endif
              @endforeach
              <input type="hidden" name="product_price" value="{{ $product->new_price }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn pull-right" type="submit"><i class="icon-shopping-cart"></i> Add to Cart </button>
              </form>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a href="{{url('product')}}" class="info">info</a>
                        <a href="{{url('wishlist/add/'.$product->id)}}" class="wishlist">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
      <div id="pagination">
              {{ $products->links() }}
          </div>
    </div>
  </section>
</div>
</div>
</div>
</div>

@stop