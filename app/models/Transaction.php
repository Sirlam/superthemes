<?php
class Transaction extends Eloquent
{
    protected $guarded = array('id');

    protected $table = 'transactions';

    public function user()
    {
        return $this->hasMany('User', 'user_id');
    }
}