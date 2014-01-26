<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTournamentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team_tournament', function(Blueprint $table)
		{
			$table->increments('id');


			$table->unsignedInteger('team_id');
			$table->unsignedInteger('tournament_id');

			$table->foreign('team_id')->references('id')->on('teams');
			$table->foreign('tournament_id')->references('id')->on('tournaments');

			$table->boolean('confirmed');

			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('team_tournament');
	}

}
