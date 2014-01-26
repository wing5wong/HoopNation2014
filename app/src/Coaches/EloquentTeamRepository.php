<?php namespace Hoopnation\Coaches;

class EloquentCoachRepository implements CoachRepositoryInterface {

    public function getAll()
    {
        return Coach::with('team')->get();
    }

}
