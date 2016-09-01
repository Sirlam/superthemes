@extends('layouts.front.master')

@section('body')

<section>
@if (Session::has('secure'))
          <h1 class="productname" id="center"> You bought the following themes</h1>
            <div class="cart-info">
                <table class="table table-striped table-bordered">
                  <tbody><tr>
                    <th width="14%" class="image">Image</th>
                    <th width="21%" class="name">Product Name</th>
                    <th width="14%" class="model">Model</th>
                    <!--<th width="12%" class="quantity">Quantity</th>-->
                    <th width="15%" class="price">Unit Price</th>
                   <!--<th width="13%" class="total">Total</th>-->
                  </tr>
                  @if (sizeof(Cart::content())>0)
                    @foreach (Cart::content() as $item)
                        <tr>
                            <td class="image"><a href="#"><img width="30" height="30" src="{{url($item->product->image)}}" alt="product" title="product"></a></td>
                            <td class="name">{{ $item->product->title }}</td>
                            <td class="model">{{ $item->name }}</td>
                            <td class="price">{{ $item->price }}</td>
                        </tr>
                    @endforeach
                  @endif
                </tbody>
                </table>
              </div>
       <div class="row">
        <div class="pull-right">
            <div class="span4 pull-right">
                <table class="table table-striped table-bordered ">
                <tbody>
                <tr>
                    <th><span class="extra bold"> paid for: </span></td>
                    <td><span class="bold">{{ Cart::count() }} Themes</span></td>
                </tr>
                <tr>
                    <td><span class="extra bold totalamout">Total :</span></td>
                    <td><span class="bold totalamout"><b id="naira1">₦</b>{{ round(Cart::total()) }}</span></td>
                </tr>
                </tbody>
                </table>
                <br>
            <form method="post" action="{{URL::route('postTransactions')}}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-success pull-right"> Go to download page </button>
            </form>
            </div>
        </div>
      </div>
</div>
</div>
@else
               <div class="container">
                   <div class="alert alert-danger" id="center">Please go and buy these themes first</div>
               </div>
@endif
</section>
@stop