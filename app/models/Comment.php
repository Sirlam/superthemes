<?php
class Comment extends Eloquent
{
    protected $guarded = array('id');

    protected $table = 'comments';

    public function category()
    {
        return $this->hasMany(Product);
        return $this->hasMany(User);
    }
}