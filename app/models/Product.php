<?php

class Product extends Eloquent
{
    protected $fillable = array(
        'category_id', 'title', 'description', 'old_price', 'new_price',
        'image', 'upload_link'
    );

    public static $rules = array(
        'category_id'=>'required|integer',
        'title'=>'required|min:2',
        'description'=>'required|min:20',
        'new_price'=>'required|numeric',
        'image'=>'required|image|mimes:jpeg,jpg,bmp,png,gif',
        'upload_link'=>'required|mimes:zip,rar'
    );

    public function Category(){
        return $this->belongsTo('Category');
    }
}