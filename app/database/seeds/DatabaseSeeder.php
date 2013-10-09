<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PostsSeeder');
		$this->call('CommentsSeeder');
		$this->call('AccountsTableSeeder');
		$this->call('PaymentsTableSeeder');
		$this->call('LedgersTableSeeder');
		$this->call('BudgetsTableSeeder');
	}

}