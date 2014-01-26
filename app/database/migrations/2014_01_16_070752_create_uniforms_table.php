<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniformsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uniforms', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->string('description');

			$table->string('image_front_path');
			$table->string('image_back_path');

			$table->string('image_alternate_front_path');
			$table->string('image_alternate_back_path');

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
		Schema::drop('uniforms');
	}

}
