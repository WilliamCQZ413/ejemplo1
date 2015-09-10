<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lugars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre_Lugar',30);
			$table->string('Tipo_Lugar', 40);
			$table->string('Descripcion');
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
		Schema::drop('lugars');
	}

}
