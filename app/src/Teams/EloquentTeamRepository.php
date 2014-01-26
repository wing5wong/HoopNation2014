<?php namespace Hoopnation\Teams;

class EloquentTeamRepository implements TeamRepositoryInterface {

    public function getAll()
    {
        return Team::with('players')->get();
    }

}
