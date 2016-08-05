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
                <div class="prnewprice span2 margin-none">{{$product->new_price}}</div>
                @foreach($users as $user)
                    @if($user->id == $product->user_id)
                <div class="pull-right"><span class="label label-success">By:</span> {{$user->name}}</div>
                    @endif
                @endforeach
              </div>
              <div class="quantitybox">
              	<a class="btn btn-success pull-left" href="#">Add to Cart</a>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Description tab & comments-->

    </div>
  </section>
  <!--  Related Products-->
  <section id="related">
    <div class="container">
      <h1 class="headingfull"><span>Related Products</span></h1>
      <section id="thumbnails">
      <div class="sidewidt" style="padding:10px;">
        <ul class="thumbnails">
        <li class="span3">
          <a href="{{url('product')}}" class="prdocutname">Best Summer Offer</a>
          <div class="thumbnail">
            <span data-original-title="" class="sale tooltip-test">Sale</span>
            <a href="{{url('product')}}"><span><span><img width="240" src="{{url('images/product-l2.jpg')}}" alt=""></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a href="#" class="btn pull-right">Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a class="info" href="{{url('product')}}">info</a>
                        <a class="wishlist" href="{{url('wishlist')}}">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          <a href="{{url('product')}}" class="prdocutname">Best Summer Offer</a>
          <div class="thumbnail">
            <a href="{{url('product')}}"><span><span><img width="240" src="{{url('images/product-l1.jpg')}}" alt=""></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a href="#" class="btn pull-right">Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a class="info" href="{{url('product')}}">info</a>
                        <a class="wishlist" href="{{url('wishlist')}}">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          <a href="{{url('product')}}" class="prdocutname">Best Summer Offer</a>
          <div class="thumbnail">
            <span data-original-title="" class="offer tooltip-test">Offer</span>
            <a href="{{url('product')}}"><span><span><img width="240" src="{{url('images/product-l1.jpg')}}" alt=""></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a href="#" class="btn pull-right">Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a class="info" href="{{url('product')}}">info</a>
                        <a class="wishlist" href="{{url('wishlist')}}">wishlist</a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        <li class="span3">
          <a href="{{url('product')}}" class="prdocutname">Best Summer Offer</a>
          <div class="thumbnail">
            <a href="{{url('product')}}"><span><span><img width="240" src="{{url('images/product-l3.jpg')}}" alt=""></span></span> </a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a href="#" class="btn pull-right">Add to Cart</a>
              <div class="clearfix"></div>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <span class="links pull-left">
                        <a class="info" href="{{url('product')}}">info</a>
                        <a class="wishlist" href="{{url('wishlist')}}">wishlist</a>
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
  </section>
</div>

@stop