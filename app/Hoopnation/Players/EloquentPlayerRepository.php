<?php namespace Hoopnation\Players;

class EloquentPlayerRepository implements PlayerRepositoryInterface {

    protected $player;

    public function __construct(Player $player)
    {
        $this->player = $player
    }

    public function getAll()
    {
        return $this->player->with('team')->get();
    }

}
