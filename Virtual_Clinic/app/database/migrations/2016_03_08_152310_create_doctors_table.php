<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doctors', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name');
			$table->string('dob');
			$table->string('gender');
			$table->string('specialty');
			$table->string('working_hourse');
			$table->string('unavailability');
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('doctors');
	}

}
