<?php namespace Hoopnation\Divisions;

class EloquentDivisionRepository implements DivisionRepositoryInterface {

    public function getAll()
    {
        return Division::all();
    }

}
