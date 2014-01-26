<?php namespace Hoopnation\Admin;

use Hoopnation\Players\PlayerRepositoryInterface;
use View;

class PlayerController extends AdminController {

    protected $layout = 'layouts.admin';

    protected $players;

    public function __construct( PlayerRepositoryInterface $players )
    {
        $this->players = $players;
        parent::__construct();
    }

    public function index()
    {
        $players = $this->players->getAll();
        $this->layout->content = View::make('admin.players.index');
    }

}
