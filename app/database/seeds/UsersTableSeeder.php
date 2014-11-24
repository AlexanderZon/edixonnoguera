<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		
		User::create(array(
			'username' => 'edixon',
			'password' => Hash::make('123456'),
			'first_name' => 'Edixon',
			'last_name' => 'Noguera',
			'email' => 'edixonnoguera@gmail.com',
			'type' => 'administrator',
			'status' => 'publish',
			));
		
		User::create(array(
			'username' => 'noguerae',
			'password' => Hash::make('654321'),
			'first_name' => 'Edixon',
			'last_name' => 'Noguera',
			'email' => 'nogueraedixon@gmail.com',
			'type' => 'operator',
			'status' => 'publish',
			));
		
	}

}