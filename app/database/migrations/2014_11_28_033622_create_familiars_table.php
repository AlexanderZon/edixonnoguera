<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFamiliarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('familiars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_employee');
			$table->string('identification_number');
			$table->string('name');
			$table->string('sex');
			$table->date('born_date');
			$table->string('born_place');
			$table->string('relationship');
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
		Schema::drop('familiars');
	}

}
