@extends('layouts.front.master')

@section('body')

<div id="maincontainer">
    <div class="container">
    @if (Session::has('success'))
            <div class="container">
                <div class="alert alert-success"> {{ Session::get('success') }}</div>
            </div>
        @elseif (Session::has('fail'))
            <div class="container">
                <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
            </div>
        @endif

        <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#view_themes">Purchased Items</a> </li>
            <li><a href="#add_theme">My Profile</a> </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" id="add_theme">
                <div class="span8 offset3">
                <h2>Edit Profile</h2>
                <form class="form-horizontal" method="post" action="{{URL::route('updateUser')}}" enctype="multipart/form-data">
                    <fieldset>
                        <div class="control-group {{ ($errors->has('firstname')) ? 'has-error' : ''}}">
                            <label for="firstname" class="control-label"><span class="red">*</span> First Name:</label>
                            <div class="controls">
                                <input id="firstname" name="firstname" type="text" class="input-xlarge" value="{{$user->firstname}}">
                                @if ($errors->has('firstname'))
                                    {{ $errors->first('firstname') }}
                                @endif
                            </div>
                        </div>
                        <div class="control-group {{ ($errors->has('lastname')) ? 'has-error' : ''}}">
                            <label for="lastname" class="control-label"><span class="red">*</span> Last Name:</label>
                            <div class="controls">
                                <input id="lastname" name="lastname" type="text" class="input-xlarge" value="{{$user->lastname}}">
                                @if ($errors->has('lastname'))
                                    {{ $errors->first('lastname') }}
                                @endif
                            </div>
                        </div>
                        <div class="control-group {{ ($errors->has('phone')) ? 'has-error' : ''}}">
                            <label for="phone" class="control-label"><span class="red">*</span> Phone:</label>
                            <div class="controls">
                                <input id="phone" name="phone" type="text" class="input-xlarge" value="{{$user->phone_number}}">
                                @if ($errors->has('phone'))
                                    {{ $errors->first('phone') }}
                                @endif
                            </div>
                        </div>
                        <div class="control-group {{ ($errors->has('address')) ? 'has-error' : ''}}">
                            <label for="address" class="control-label"> Address:</label>
                            <div class="controls">
                                <textarea id="address" name="address" class="input-xlarge">{{$user->address}}</textarea>
                                @if ($errors->has('address'))
                                    {{ $errors->first('address') }}
                                @endif
                            </div>
                        </div>
                        {{Form::token()}}
                        <input type="Submit" value="Update" class="btn btn-success">
                    </fieldset>
                </form>
                </div>
            </div>

            <div class="tab-pane active" id="view_themes">
                <h2>Purchased Items</h2>
                <div class="table-div">
                <table class="table table-striped table-bordered">
                <tr>
                    <th class="image">Image</th>
                    <th class="name">Theme Title</th>
                    <th class="model">Description</th>
                    <th class="price">Price</th>
                    <th class="categorytitle">Category</th>
                    <th class="total"> Action </th>
                </tr>

                @foreach($transactions as $transaction)
                    @if($user->id == $transaction->user_id)
                    @foreach($products as $product)
                    <tr>
                    <th class="image"><img width="30" height="30" alt="Theme" src="{{$product->image}}"> </th>
                    <th class="name">{{$product->title}}</th>
                    <th class="model">{{$product->description}}</th>
                    <th class="price">{{$product->new_price}}</th>
                    @foreach($categories as $category)
                        @if($category->id == $product->category_id)
                        <th class="categorytitle">
                            {{$category->name}}
                        </th>
                        @endif
                    @endforeach
                    <th class="total">
                     <a href="{{$product->upload_link}}" class="btn btn-primary btn-xs delete_theme">Download</a>
                      </th>
                    </tr>
                    @endforeach
                    @endif
                @endforeach

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop