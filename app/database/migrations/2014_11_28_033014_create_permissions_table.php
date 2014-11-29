<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permissions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_employee');
			$table->string('doc');
			$table->string('p1p2');
			$table->string('nac');
			$table->string('ea');
			$table->string('fall');
			$table->string('est');
			$table->string('another');
			$table->date('from');
			$table->date('to');
			$table->integer('duration');
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
		Schema::drop('permissions');
	}

}
