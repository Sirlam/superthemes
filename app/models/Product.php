<?php
class Product extends Eloquent
{
    protected $guarded = array('id');
    public function category()
    {
        return $this->hasMany(Category);
    }
}