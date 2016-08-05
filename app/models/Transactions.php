<?php
class Transactions extends Eloquent
{
    protected $guarded = array('id');

    protected $table = 'transaction';

    public function user()
    {
        return $this->belongsTo('User');
    }
}