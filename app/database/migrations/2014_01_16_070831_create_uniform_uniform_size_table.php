<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniformUniformSizeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uniform_uniform_size', function(Blueprint $table)
		{
			$table->increments('id');

			$table->unsignedInteger('uniform_id');
			$table->unsignedInteger('uniform_size_id');

			$table->foreign('uniform_id')->references('id')->on('uniforms');
			$table->foreign('uniform_size_id')->references('id')->on('uniform_sizes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uniform_uniform_size');
	}

}
