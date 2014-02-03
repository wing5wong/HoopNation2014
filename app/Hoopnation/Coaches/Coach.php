<?php namespace Hoopnation\Coaches;

class Coach extends \Eloquent{

    protected $fillable = [];

    public function __construct( CoachRepositoryInterface $coaches)
    {
        $this->coaches = $coaches;
    }

    public function team()
    {
        return $this->belongsTo('Hoopnation\Teams\Team');
    }

}
