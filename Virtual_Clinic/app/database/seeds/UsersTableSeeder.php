<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = [
					[
								'email'      => 'nishikanto.abm@gmail.com',
								'password'   => Hash::make('a'),
								'access_level' => '1',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],

					[
								'email'      => 'nusrat.ara@gmail.com',
								'password'   => Hash::make('a'),
								'access_level' => '1',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					]

		];

		DB::table('users')->insert($users);
	}

}