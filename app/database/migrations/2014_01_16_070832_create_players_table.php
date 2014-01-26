<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('first_name');
			$table->string('last_name');
			$table->string('nick_name')->nullable();

			$table->string('email_address')->nullable();
			$table->string('cell_number')->nullable();

			$table->boolean('nbl_restricted');

			$table->unsignedInteger('team_id');
			$table->foreign('team_id')->references('id')->on('teams');

			$table->integer('shirt_number');

			$table->unsignedInteger('uniform_size_id');
			$table->foreign('uniform_size_id')->references('id')->on('uniform_sizes');

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
		Schema::drop('players');
	}

}
