@extends('layouts.front.master')

@section('body')

<div id="maincontainer">
@if (Auth::check() && Auth::user()->isSeller()))
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
            <li class="active"><a href="#add_theme">Add theme</a> </li>
            <li><a href="#view_themes">View my themes</a> </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="add_theme">
                <div class="span8 offset3">
                <h2>Add a theme</h2>
                <form class="form-horizontal" method="post" action="{{URL::route('postProduct')}}" enctype="multipart/form-data">
                    <fieldset>
                        <div class="control-group {{ ($errors->has('title')) ? 'has-error' : ''}}">
                            <label for="title" class="control-label"><span class="red">*</span> Theme title:</label>
                            <div class="controls">
                                <input id="title" name="title" type="text" class="input-xlarge">
                                @if ($errors->has('title'))
                                    {{ $errors->first('title') }}
                                @endif
                            </div>
                        </div>
                        <div class="control-group {{ ($errors->has('description')) ? 'has-error' : ''}}">
                            <label for="description" class="control-label"><span class="red">*</span> Description:</label>
                            <div class="controls">
                                <textarea id="description" name="description" class="input-xlarge"></textarea>
                                @if ($errors->has('description'))
                                    {{ $errors->first('description') }}
                                @endif
                            </div>
                        </div>
                        <div class="control-group {{ ($errors->has('old_price')) ? 'has-error' : ''}}">
                            <label for="old_price" class="control-label"> Old price:</label>
                            <div class="controls">
                                <input id="old_price" name="old_price" type="text" class="input-xlarge">
                                @if ($errors->has('old_price'))
                                    {{ $errors->first('old_price') }}
                                @endif
                            </div>
                        </div>
                        <div class="control-group {{ ($errors->has('new_price')) ? 'has-error' : ''}}">
                            <label for="new_price" class="control-label"><span class="red">*</span> New price:</label>
                            <div class="controls">
                                <input id="new_price" name="new_price" type="text" class="input-xlarge">
                                @if ($errors->has('new_price'))
                                    {{ $errors->first('new_price') }}
                                @endif
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="category_id" class="control-label"><span class="red">*</span> Category:</label>
                            <div class="controls">
                                <select class="input-xlarge" id="category_id" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group {{ ($errors->has('image')) ? 'has-error' : ''}}">
                            <label for="image" class="control-label"><span class="red">*</span> Image:</label>
                            <div class="controls">
                                <input id="image" name="image" type="file" class="input-xlarge">
                                @if ($errors->has('image'))
                                    {{ $errors->first('image') }}
                                @endif
                                <p class="help-block">(.jpg, .jpeg, .bmp, .png, .gif)</p>
                            </div>
                        </div>
                        <div class="control-group {{ ($errors->has('file')) ? 'has-error' : ''}}">
                            <label for="file" class="control-label"><span class="red">*</span> Theme file:</label>
                            <div class="controls">
                                <input id="file" name="file" type="file" class="input-xlarge">
                                @if ($errors->has('file'))
                                    {{ $errors->first('file') }}
                                @endif
                                <p class="help-block">(.zip, .rar)</p>
                            </div>
                        </div>
                        <input type="Submit" value="Add" class="btn btn-success">
                    </fieldset>
                </form>
                </div>
            </div>

            <div class="tab-pane" id="view_themes">
                <h2>View my themes</h2>
            </div>
        </div>
    </div>
@else
<div class="container">
    <button class="btn btn-large"> <a href="{{URL::route('home')}}">Unauthorized, Get me out of here</a></button>
</div>
@endif
</div>
@stop