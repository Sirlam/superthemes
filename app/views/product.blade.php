@extends('...layouts.front.master')

@section('body')

<!--Content starts-->
<div id="maincontainer">
  <section id="product">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="#">Home</a><span class="divider">/</span></li>
        <li class="active">Product</li>
      </ul>
    @if (Session::has('success'))
            <div class="container">
                <div class="alert alert-success"> {{ Session::get('success') }}</div>
            </div>
        @elseif (Session::has('fail'))
            <div class="container">
                <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
            </div>
        @endif
      <!-- Product Details-->
      <div class="row">
        <div class="span5">
          <ul class="thumbnails mainimage">
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{{$product->image}}">
                <img alt="" src="{{$product->image}}">
              </a>
            </li>
          </ul>

          <ul class="thumbnails mainimage">
           <li class="producthtumb">
              <a href="#"><span><span><img width="240" src="{{$product->image}}" alt=""></span></span> </a>
            </li>
            <li class="producthtumb">
              <a href="#"><span><span><img width="240" src="{{$product->image}}" alt=""></span></span> </a>
            </li>
          </ul>

        </div>
        <div class="span7">
          <div class="row">
            <div class="span7">
              <h1 class="productname">{{$product->title}}</h1>
              <div class="productprice">
                <div class="proldprice">{{$product->old_price}}</div>
                <div class="prnewprice span2 margin-none"><b>₦</b>{{round($product->new_price)}}</div>
                @foreach($users as $user)
                    @if($user->id == $product->user_id)
                <div class="pull-right"><span class="label label-success">By:</span> {{$user->firstname}}</div>
                    @endif
                @endforeach
              </div>
              <div class="quantitybox">
                            <form method="post" action="{{URL::route('addCart')}}">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            @foreach ($categories as $category)
                            @if ($category->id == $product->category_id)
                            <input type="hidden" name="category_id" value="{{ $category->id }}">
                            @endif
                            @endforeach
                            <input type="hidden" name="product_price" value="{{ $product->new_price }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              	<button class="btn btn-success pull-left">Add to Cart</button>
              	</form>
                <div class="links  productlinks">
                  <a class="wishlist" href="{{url('wishlist/add/'.$product->id)}}">wishlist</a>
                </div>
              </div>
             <div class="productdesc">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#description">Description</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    <h2>About this theme</h2>
                    <p>{{$product->description}}</p>
                  </div>
             <ul class="nav nav-tabs" id="myTab">
               <li class="active"><a href="#comments">Comments</a></li>
             </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="comments">
                  <h2 class="com2">Comments on this theme</h2>
                    <div class="panel panel-warning">
                    @foreach($comments as $comment)
                       @foreach($users as $user)
                          @if($user->id == $comment->user_id)
                        <div class="panel-heading com"><span class="totalamout"> {{ $user->firstname}} {{ $user->lastname }}</span></div>
                        @endif
                      @endforeach
                        <div class="panel-body com2">{{$comment->comment}}</div>
                    @endforeach
                   </div>
                 </div>
                    <div id="pagination" class="com2">
                       {{ $comments->links() }}
                      </div>
                </div>
                <form method="post" action="{{URL::route('postComment')}}">
                <div class="control-group">
                <label for="comment" class="control-label">Comment:</label>
                <div class="controls">
                <textarea id="address" name="comment" rows="5" class="input-xlarge"></textarea>
                </div>
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="Submit" value="submit comment" class="btn btn-primary">
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Description tab & comments-->
    </div>
    </div>
    </div>
  </section>
  <!--  Related Products-->
  <section id="related">
    <div class="container">
      <h1 class="headingfull"><span>Related Products</span></h1>
      <section id="thumbnails">
      <div class="sidewidt" style="padding:10px;">
      @foreach($prods as $prod)
        <ul class="thumbnails">
        <li class="span3">
          <a href="{{url('product')}}" class="productname">{{ $prod->title }}</a>
          <div class="thumbnail">
            <span data-original-title="" class="sale tooltip-test">Hot</span>
            <a href="{{url('product')}}"><span><span><img width="240" src="{{url( $prod->image )}}" alt=""></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">{{ $prod->old_price }}</span>
                <span class="newprice">{{ $prod->new_price }}</span>
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
                        <a class="info" href="{{url('product')}}">info</a>
                        <a class="wishlist" href="{{url('wishlist/add/'.$product->id)}}">wishlist</a>
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
        </div>
      </section>
    </div>
  </section>
</div>

@stop