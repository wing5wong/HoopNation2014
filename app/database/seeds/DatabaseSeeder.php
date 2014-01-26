<?php

use Hoopnation\Tournaments\Tournament;
use Hoopnation\Teams\Team;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$tournament = Tournament::create(['name'=>'test','year'=>'2014']);
		$team = Team::create(['name'=>'test-team']);

		$tournament->teams()->attach($team);
	}

}
