<?php namespace Hoopnation\Players;

class Player extends \Eloquent {

    protected $fillable = [];

    public function team()
    {
        return $this->belongsTo('Hoopnation\Teams\Team');
    }

}
