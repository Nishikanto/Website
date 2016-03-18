<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AppointmentsTableSeederTableSeeder extends Seeder {

	public function run()
	{
		$appointments = [
					[
								'patients_id' =>'1',
								'doctors_id'  =>'1',
								'schedule'	  =>date('Y-m-d H:i:s')							
					],

					[
								'patients_id' =>'2',
								'doctors_id'  =>'2',
								'schedule'	  =>date('Y-m-d H:i:s')	
					]

		];

		DB::table('appointments')->insert($appointments);
	}

}