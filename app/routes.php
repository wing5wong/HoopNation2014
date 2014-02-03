<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

App::bind('Hoopnation\Tournaments\TournamentRepositoryInterface','Hoopnation\Tournaments\EloquentTournamentRepository');
App::bind('Hoopnation\Players\PlayerRepositoryInterface','Hoopnation\Players\EloquentPlayerRepository');

Route::get('users', function()
{
    echo "one";
    return "two";
});

Route::get('/','HomeController@showWelcome');



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'admin'],function(){

    /*
    |--------------------------------------------------------------------------
    | Tournaments
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix'=>'tournaments'], function(){
        Route::get('filter', 'Hoopnation\Admin\TournamentController@filter');
        Route::get('{id}/teams/','Hoopnation\Admin\TournamentController@getTournamentTeams');
        Route::get('{id}/teams/filter','Hoopnation\Admin\TournamentController@getTournamentTeamsFiltered');
    });
    Route::resource('tournaments', 'Hoopnation\Admin\TournamentController');

    /*
    |--------------------------------------------------------------------------
    | Matches
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | Teams
    |--------------------------------------------------------------------------
    */
    Route::resource('teams', 'Hoopnation\Admin\TeamController');

    /*
    |--------------------------------------------------------------------------
    | Players
    |--------------------------------------------------------------------------
    */
    Route::resource('players', 'Hoopnation\Admin\PlayerController');

});
