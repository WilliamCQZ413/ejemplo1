<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asesors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->BigInteger('NumeroIdentificacion_Asesor');
			$table->string('TipoDoc_Asesor', 4);
			$table->string('Nombre_Asesor', 30);
			$table->string('Apellido_Asesor', 30);
			$table->string('Direccion_Asesor', 60);
			$table->BigInteger('Telefono_Asesor');
			$table->char('Genero_Asesor');
			$table->string('Email_Asesor', 60);
			$table->String('Contraseña_Asesor');
			$table->string('Cargo_Asesor', 10);
			//asignamos campo de llave forarena
			$table->integer('Fk_IdArea')->unsigned();
			//creamos la relacion
			$table->Foreign('Fk_IdArea')->references('id')->on('Areas');
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
		Schema::drop('asesors');
	}

}
