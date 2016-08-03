@extends('layouts.front.master')

@section('body')

<!--Content starts-->
<div id="maincontainer">
	<section id="checkout">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a><span class="divider">/</span></li>
        <li class="active">Cart</li>
      </ul>
      <h1 class="productname">Presently in your cart</h1>
      <div class="cart-info">
            <table class="table table-striped table-bordered">
              <tbody>
              <tr>
              <th class="image">Image</th>
               <th class="name"><a href="#">Product Name</a></th>
               <th class="model">Product Category</th>
               <!-- <td class="quantity">In Stock </td>-->
                <th class="price">Product Price</th>
               <!-- <td class="total"><a class="btn" href="#">Add to Cart</a>-->
               <th class="total"> Action </th>
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
             <!-- <tr>
                <td class="image"><a href="#"><img width="30" height="30" src="{{url('images/prodcut-40x40.jpg')}}" alt="product" title="product"></a></td>
                <td class="name"><a href="#">Mens Product</a></td>
                <td class="model">LM - 250</td>
                <td class="quantity">In Stock </td>
                <td class="price">$120.68</td>
                <td class="total"><a class="btn" href="#">Add to Cart</a>
                  <a href="#"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></a></td>
              </tr>
              <tr>
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
    <a href="{{url('checkout')}}"> <button class="btn btn-primary pull-right">Checkout</button></a>
     <a href=""></a> <button class="btn pull-right">Continue Shoping</button> </a>
          </div>
    </div>
  </section>
</div>

@stop