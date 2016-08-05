<?php
class Transactions extends Eloquent
{
    protected $guarded = array('id');

    protected $table = 'transactions';

    public function user()
    {
        return $this->belongsTo('User');
    }
}