<?php

class Category extends Eloquent
{
    protected $fillable = array('name');

    protected static $rules = array('array'=>'required|min3');

    public function Products(){
        return $this->hasMany('Product');
    }
}