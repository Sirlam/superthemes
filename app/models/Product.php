<?php
class Product extends Eloquent
{
    protected $guarded = array('id');

    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo('Category');
    }
}