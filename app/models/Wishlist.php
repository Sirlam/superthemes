<?php
class Wishlist extends Eloquent
{
    protected $guarded = array('id');
    public function user()
    {
        return $this->belong('User');
    }
}