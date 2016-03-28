<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCheckinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('checkin', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('patient_id');
			$table->integer('doctor_id');
			$table->string('schedule');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('checkin');
	}

}
