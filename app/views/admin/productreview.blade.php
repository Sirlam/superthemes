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
      @if (Session::has('success'))
              <div class="container">
                  <div class="alert alert-success"> {{ Session::get('success') }}</div>
              </div>
          @elseif (Session::has('fail'))
              <div class="container">
                  <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
              </div>
          @endif
  <div class="container">
  <h2 id="center">Product Review</h2>
  <ul class="nav nav-tabs">
    <li id="feat" class="active"><a data-toggle="tab" href="#featured">Featured Themes</a></li>
    <li><a id="other" data-toggle="tab" href="#others">Other Themes</a></li>
  </ul>
    <div class="tab-content">
      <div id="featured" class="tab-pane fade in active">
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
                <td class="total">
                  <a class="btn btn-danger btn-small" type="button" href="{{url('/admin/products/delete/'.$product->id)}}">delete</a>
                  <a class="btn btn-danger btn-small" type="button" href="{{url('/admin/products/unfeature/'.$product->id)}}">unfeature</a>
                  </td>
                </form>
              </tr>
              @endforeach
            </tbody></table>
                  <div id="pagination">
                          {{ $products->links() }}
                      </div>
          </div>
    </div>
    </div>
        <div id="others" class="tab-pane fade">
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
                      @foreach($prods as $prod)
                      <tr>
                        <td class="image"><a href="#"><img width="30" height="30" src="{{url($prod->image)}}" alt="product" title="product"></a></td>
                        <td class="name"><a href="#">{{ $prod->title }}</a></td>
                        @foreach($categories as $category)
                        @if($category->id == $prod->category_id )
                        <td class="model">{{ $category->name }}</td>
                        @endif
                        @endforeach
                        @foreach($users as $user)
                        @if($user->id == $prod->user_id)
                        <td class="quantity">{{ $user->firstname }}</td>
                        @endif
                        @endforeach
                        <td class="price">{{ $prod->new_price }}</td>
                        <td class="total">
                          <a class="btn btn-danger btn-small" type="button" href="{{url('/admin/products/delete/'.$prod->id)}}">delete</a>
                          <a class="btn btn-primary btn-small" type="button" href="{{url('/admin/products/feature/'.$prod->id)}}">feature</a>
                          </td>
                        </form>
                      </tr>
                      @endforeach
                    </tbody></table>
                          <div id="pagination">
                                  {{ $prods->links() }}
                              </div>
                  </div>
            </div>
    </div>
    </div>
  </section>
</div>

@stop