@extends('layouts.front.master')

@section('body')

<!--Content starts-->
<div id="maincontainer">
	<section id="checkout">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a><span class="divider">/</span></li>
        <li class="active">Wishlist</li>
      </ul>
      <h1 class="productname">Presently In your wishlist</h1>
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
              @foreach($wishlists as $wishlist)
              @foreach($products as $product)
              @if($product->id == $wishlist->product_id)
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
                <td class="total"><a class="btn" href="{{URL::route('addCart')}}">Add to Cart</a>
                  <a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
                </form>
              </tr>
              @endif
              @endforeach
              @endforeach
             <!-- <tr>
                <td class="image"><a href="#"><img width="30" height="30" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
                <td class="name"><a href="#">Womens Product</a></td>
                <td class="model">LM - 575</td>
                <td class="quantity">In Stock </td>
                <td class="price">$120.68</td>
                <td class="total"><a class="btn" href="#">Add to Cart</a>
                  <a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
              </tr>
              <tr>
                <td class="image"><a href="#"><img width="30" height="30" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
                <td class="name"><a href="#">Kids Product</a></td>
                <td class="model">LM - 568</td>
                <td class="quantity">In Stock </td>
                <td class="price">$120.68</td>
                <td class="total"><a class="btn" href="#">Add to Cart</a>
                  <a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
              </tr>
              <tr>
                <td class="image"><a href="#"><img width="30" height="30" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
                <td class="name"><a href="#">T-Shirt</a></td>
                <td class="model">product 11</td>
                <td class="quantity">In Stock </td>
                <td class="price">$120.68</td>
                <td class="total"><a class="btn" href="#">Add to Cart</a>
                  <a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
              </tr>
              <tr>
                <td class="image"><a href="#"><img width="30" height="30" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
                <td class="name"><a href="#">All Products</a></td>
                <td class="model">LM - 358</td>
                <td class="quantity">In Stock </td>
                <td class="price">$120.68</td>
                <td class="total"><a class="btn" href="#">Add to Cart</a>
                  <a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
              </tr>-->
            </tbody></table>
            <a class="btn btn-success pull-right" href="{{url('/')}}">Continue Shopping</a>
          </div>
    </div>
  </section>
</div>

@stop