<?php
class Comment extends Eloquent
{
    protected $guarded = array('id');

    protected $table = 'comments';

    public function product()
    {
        return $this->belongsTo('Product');
    }
    public function user()
    {
        return $this->belongsTo('User');
    }
}