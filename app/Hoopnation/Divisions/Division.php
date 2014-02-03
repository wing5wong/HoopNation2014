<?php namespace Hoopnation\Divisions;

class Division extends \Eloquent{

    protected $fillable = [];

    public function team()
    {
        return $this->hasMany('Hoopnation\Teams\Team');
    }

}
