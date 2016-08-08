@extends('...layouts.front.master')

@section('body')

<!--Content starts-->
<div id="maincontainer">
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
           			 <ul class="bestseller">
                        @foreach($best_seller as $best)
             			 <li>
                            <img width="50" height="50" src="{{url($best->image)}}" alt="product" title="product">
                            <a class="productname" href="{{url('product/'.$best->id)}}"> {{ $best->title }}</a>
                                @if ($category->id == $best->category_id)
                                    <span class="procategory">{{ $category->name }}</span>
                                @endif
                            <span class="price">{{ $best->new_price }}</span>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                      </aside>
				<aside>
					<h1 class="headingfull"><span>Best Offer</span> </h1>
                    <div class="sidewidt">
           			 <ul class="bestseller">
                        @foreach($best_offer as $offer)
             			 <li>
                            <img width="50" height="50" src="{{url($offer->image)}}" alt="product" title="product">
                            <a class="productname" href="{{url('product/'.$offer->id)}}"> {{ $offer->title }}</a>
                            @foreach($categories as $category)
                                @if ($category->id == $offer->category_id)
                                    <span class="procategory">{{ $category->name }}</span>
                                @endif
                            @endforeach
                            <span class="price">{{ $offer->new_price }}</span>
                          </li>
                          @endforeach
                        </ul>
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
          By  <a href="#">  {{ $user->firstname }}:</a>
        @endif
      @endforeach
      <b><span class="pull-right">{{$product->title}}</span></b>
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
              <button type="submit" class="btn pull-right"><i class="icon-shopping-cart"></i> Add to Cart </button>
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