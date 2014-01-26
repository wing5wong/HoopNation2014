<?php namespace Hoopnation\Teams;

class Team extends \Eloquent {

    protected $fillable = [];

    public function tournaments()
    {
        return $this->belongsToMany('Hoopnation\Tournaments\Tournament')->withPivot('confirmed');
    }

    public function division()
    {
        return $this->belongsTo('Hoopnation\Divisions\Division');
    }

    public function players()
    {
        return $this->hasMany('Hoopnation\Players\Player');
    }

    public function coaches()
    {
        return $this->hasMany('Hoopnation\Coaches\Coach');
    }
}
