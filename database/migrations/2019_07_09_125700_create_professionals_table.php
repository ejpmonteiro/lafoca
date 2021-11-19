<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfessionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professionals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('lattes', 100);
			$table->integer('formation_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->string('image', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('professionals');
	}

}
