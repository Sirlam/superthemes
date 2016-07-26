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
      <h1 class="productname">Summer Offer Best Product (5)</h1>
      <div class="cart-info">
            <table class="table table-striped table-bordered">
              <tbody><tr>
                <th class="image">Image</th>
                <th class="name">Product Name</th>
                <th class="model">Model</th>
                <th class="quantity">Stock</th>
                <th class="price">Unit Price</th>
                <th class="total">Action</th>
              </tr>
              <tr>
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
              </tr>
            </tbody></table>
            <a class="btn btn-success pull-right" href="{{url('/')}}">Continue Shopping</a>
          </div>
    </div>
  </section>
</div>

@stop