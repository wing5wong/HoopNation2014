<?php namespace Hoopnation\Tournaments;

class EloquentTournamentRepository implements TournamentRepositoryInterface {

    protected $tournament;

    public function __construct(Tournament $tournament)
    {
        $this->tournament = $tournament;
    }

    public function getAll()
    {
        return $this->tournament->all();
    }

    public function getById($id)
    {
        return $this->tournament->findOrFail($id);
    }

    public function getFiltered($filters)
    {
        $tournaments = $this->tournament->select();

        if(isset($filters['year']))
            $tournaments->whereYear($filters['year']);
        if(isset($filters['name']))
            $tournaments->whereName($filters['name']);

        return $tournaments->get();
    }

    public function getTeams($tournament)
    {
        return $tournament->teams()->with('players')->get();
    }

    public function getTeamsFiltered($tournament, $filter)
    {
        $result = $tournament->teams()->with(['players','division']);

        /*
        Filter on pivot table, confirmed field
        only modify the query if filter is confirmed and has '', 'true', or 'false' value
         */
        if(isset($filter['confirmed']))
        {
            if($filter['confirmed']=='' || $filter['confirmed']=='true') {
                $result->wherePivot('confirmed', 1);
            }
            elseif($filter['confirmed']=='false') {
                $result->wherePivot('confirmed', 0);
            }
        }
        /*
        Filter division field
        */
        if(isset($filter['division_id']))
            $result->where('division_id','=', $filter['division_id']);

        return $result->get();
    }

}
