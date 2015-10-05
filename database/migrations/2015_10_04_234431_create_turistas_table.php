<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuristasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('turistas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('apellido');
			$table->bigInteger('telefono');
			$table->string('email')->unique();
			$table->string('password', 60);
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
		Schema::drop('turistas');
	}

}
