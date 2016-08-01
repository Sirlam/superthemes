<?php
class Category extends Eloquent
{
    protected $guarded = array('id');

    protected $table = 'categories';

    public function products()
    {
        return $this->hasMany('Product', 'category_id');
    }
}