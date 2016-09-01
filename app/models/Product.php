<?php
class Product extends Eloquent
{
    protected $guarded = array('id');

    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo('Category');
    }
    public function comments()
    {
        return $this->hasMany('Comment', 'product_id');
    }
}