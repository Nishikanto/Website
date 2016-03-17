<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVisitsummaryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visitsummary', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('patient_id');
			$table->string('patient_name');
			$table->string('height');
			$table->string('weight');
			$table->string('bp');
			$table->string('retinal_image');
			$table->string('medication');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('visitsummary');
	}

}
