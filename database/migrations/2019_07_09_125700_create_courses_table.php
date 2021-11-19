<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 100);
			$table->text('description', 65535);
			$table->date('date_beginning');
			$table->date('date_finish');
			$table->integer('professional_id')->unsigned();
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
		Schema::drop('courses');
	}

}
