<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creación de la tabla de Perfiles.

		Schema::create('profile',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('lastname');
			$table->integer('age');
			$table->string('ocupation');
			$table->text('history');
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
		//
	}

}
