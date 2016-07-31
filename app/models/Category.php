<?php
class Category extends Eloquent
{
    protected $guarded = array('id');

    public function products()
    {
        return $this->hasMany(Product);
    }
}