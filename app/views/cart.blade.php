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
                <th class="price">Product Price</th>
               <th class="total"> Action </th>
              </tr>
              @if (sizeof(Cart::content())>0)
               @foreach (Cart::content() as $item)
              <tr>
               <td class="image"><a href="#"><img width="30" height="30" src="{{url($item->product->image)}}" alt="product" title="product"></a></td>
                <td class="name">{{ $item->product->title }}</td>
                <td class="model">{{ $item->name }}</td>
                <td class="price">{{ $item->price }}</td>
                 <form method="post" action="{{URL::route('removeCart')}}">
                 <input type="hidden" name="product_id" value="{{ $item->rowid }}">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <td class="total">
                 <button type="submit" class="btn btn-primary"><img alt="" src="{{url('images/remove.png')}}" data-original-title="Remove" class="tooltip-test"></button></td>
                  </form>
              </tr>
              @endforeach
              @endif
            </tbody></table>
    <a href="{{url('checkout')}}"> <button class="btn btn-primary pull-right">Checkout</button></a>
     <a href=""></a> <button class="btn pull-right">Continue Shoping</button> </a>
          </div>
    </div>
  </section>
</div>

@stop