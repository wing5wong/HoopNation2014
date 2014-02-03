<?php namespace Hoopnation\Tournaments;

class Tournament extends \Eloquent {

    protected $fillable = [];

    public function teams()
    {
        return $this->belongsToMany('Hoopnation\Teams\Team')->withPivot('confirmed');
    }

}
