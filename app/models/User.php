<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function isAdmin()
    {
        return $this->isAdmin == 1;
        return $this->roles == 2;
    }

    public function isSeller(){
        return $this->isSeller == 1;
    }
    public function accounts()
    {
        return $this->hasMany('Account', 'user_id');
    }
    public function comments()
    {
        return $this->hasMany('Comment', 'user_id');
    }
    public function transactions()
    {
        return $this->hasMany('Transaction', 'user_id');
    }
    public function wishlists()
    {
        return $this->hasMany('Wishlist', 'user_id');
    }
}
