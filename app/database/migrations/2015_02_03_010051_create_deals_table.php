<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
	Schema::create('profile',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('description');
			$table->string('image');
			$table->dateTime('from');
			$table->dateTime('to');
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
