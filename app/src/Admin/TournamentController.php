<?php namespace Hoopnation\Admin;

use Hoopnation\Tournaments\TournamentRepositoryInterface;
use Input;
use View;

class TournamentController extends AdminController {

    protected $layout = 'layouts.admin';

    protected $tournaments;

    public function __construct( TournamentRepositoryInterface $tournaments )
    {
        $this->tournaments = $tournaments;
        parent::__construct();
    }

    public function index()
    {
        $tournaments = $this->tournaments->getAll();

        $this->layout->content = View::make('admin.tournaments.index', compact('tournaments'));
    }

    public function show($id)
    {
       $tournament = $this->tournaments->getById($id);

        $this->layout->content = View::make('admin.tournaments.show', compact('tournament'));
    }

    public function filter()
    {
        $tournaments = $this->tournaments->getFiltered(Input::all());

        $this->layout->content = View::make('admin.tournaments.index', compact('tournaments'));
    }

    public function getTournamentTeams($tournamentId)
    {
        $tournament = $this->tournaments->getById($tournamentId);
        $teams = $this->tournaments->getTeams($tournament);

        $this->layout->content = View::make('admin.tournaments.teams', compact('tournament','teams'));
    }

    public function getTournamentTeamsFiltered($tournamentId)
    {
        $tournament = $this->tournaments->getById($tournamentId);
        $teams = $this->tournaments->getTeamsFiltered($tournament, Input::all());

        $this->layout->content = View::make('admin.tournaments.teams', compact('tournament','teams'));
    }

}
