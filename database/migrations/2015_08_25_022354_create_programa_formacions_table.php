<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramaFormacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programa_formacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre_Programa',60);
			

			//asignamos atributo de la llave foranea
<<<<<<< HEAD
			$table->integer('Fk_IdCoordinacion')->unsigned();

			//creamos la relacion
			$table->foreign('Fk_IdCoordinacion')->references('id')->on('Coordinacions');
=======
			$table->integer('FK_IdCoordinacion')->unsigned();

			//creamos la relacion
			$table->foreign('FK_IdCoordinacion')->references('id')->on('Coordinacions');
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
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
		Schema::drop('programa_formacions');
	}

}
