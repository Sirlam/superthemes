@extends('layouts.front.master')

@section('body')


<div id="maincontainer">
	<section id="checkout">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a><span class="divider">/</span></li>
        <li class="active">Wishlist</li>
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
      <h1 class="productname">search results for {{ $keyword }}</h1>
      <div class="cart-info">
            <table class="table table-striped table-bordered">
              <tbody><tr>
                <th class="image">Image</th>
                <th class="name">Product Name</th>
                <th class="model">Category</th>
                <th class="quantity">Owned By</th>
                <th class="price">Unit Price</th>
                <th class="total">Action</th>
              </tr>
              @foreach($products as $product)
              <tr>
                <td class="image"><a href="#"><img width="30" height="30" src="{{url($product->image)}}" alt="product" title="product"></a></td>
                <td class="name"><a href="#">{{ $product->title }}</a></td>
                @foreach($categories as $category)
                @if($category->id == $product->category_id )
                <td class="model">{{ $category->name }}</td>
                @endif
                @endforeach
                @foreach($users as $user)
                @if($user->id == $product->user_id)
                <td class="quantity">{{ $user->firstname }}</td>
                @endif
                @endforeach
                <td class="price">{{ $product->new_price }}</td>
                <form method="post" action="{{URL::route('addCart')}}">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                @foreach ($categories as $category)
                @if ($category->id == $product->category_id)
                <input type="hidden" name="category_id" value="{{ $category->id }}">
                @endif
                @endforeach
                <input type="hidden" name="product_price" value="{{ $product->new_price }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <td class="total"><button class="btn" href="{{URL::route('addCart')}}">Add to Cart</button>
                  <a href="{{url('/wishlist/delete/'.$product->id)}}"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
                </form>
              </tr>
              @endforeach
            </tbody></table>
            <a class="btn btn-success pull-right" href="{{url('/')}}">Continue Shopping</a>
          </div>
    </div>
  </section>
</div>

@stop
