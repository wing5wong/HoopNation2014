<?php namespace Hoopnation\Matches;

class Match extends \Eloquent {

    protected $fillable = [];

    public function __construct( MatchRepositoryInterface $matches)
    {
        $this->matches = $matches;
    }

    public function teamA()
    {
        return $this->belongsTo('Hoopnation\Teams\Team','team_a_id');
    }

    public function teamAPlayers()
    {
        return $this->hasManyThrough('Hoopnation\Players\Player', 'Hoopnation\Teams\Team', 'team_a_id', 'player_id')
    }

    public function teamB()
    {
        return $this->belongsTo('Hoopnation\Teams\Team','team_b_id');
    }

    public function teamBPlayers()
    {
        return $this->hasManyThrough('Hoopnation\Players\Player', 'Hoopnation\Teams\Team', 'team_b_id', 'player_id')
    }

}
