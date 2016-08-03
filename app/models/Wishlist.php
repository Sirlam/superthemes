<?php
class Wishlist extends Eloquent
{
    protected $guarded = array('id');
    public function wishlists()
    {
        return $this->hasMany(Product);
        return $this->hasMany(User);
    }
}