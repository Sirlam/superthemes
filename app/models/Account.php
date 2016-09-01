<?php
class Account extends Eloquent
{
    protected $guarded = array('id');

    protected $table = 'accounts';

    public function user()
    {
        return $this->belongsTo('User');
    }
}