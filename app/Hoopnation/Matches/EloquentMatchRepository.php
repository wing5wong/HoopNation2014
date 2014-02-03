<?php namespace Hoopnation\Matches;

class EloquentMatchRepository implements MatchRepositoryInterface {

    public function getAll()
    {
        return Match::with('teamA','TeamB', 'teamA.players', 'teamB.players')->get();
    }

}
