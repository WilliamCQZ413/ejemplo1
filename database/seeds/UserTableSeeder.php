<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{

		
		
			$Id_Coordinacion = \DB::table('Coordinacions')->insertGetId(array (

			'Nombre_Coordinacion'		=> ('Centro de gestion mercalos logistica y tecnologias de la informacion')
			
			));

			$Id_Programa = \DB::table('programa_formacions')->insertGetId(array (

			'Nombre_Programa' 		=>('Analisis y Desarrollo de sistemas de informacion'),
			'Fk_IdCoordinacion'		=> $Id_Coordinacion

			));

			$Id_Ficha = \DB::table('ficha_caracterizacions')->insertGetId(array (

			'Numero_Ficha' 		=> (912286),
			'FechaInicio_Ficha'		=> ('2015-02-27'),
			'FechaFin_Ficha'		=> ('2016-06-16'),
			'Fk_IdProgramaFormacion'	=> $Id_Programa

			));

			\DB::table('aprendizs')->insert(array (

			'id'				 => (1),
			'NumeroIdentificacion_Aprendiz'	 => ( 11111111),
			'TipoDoc_Aprendiz'		=>  ('X'),      
			'Nombre_Aprendiz'		=> ('X'),
			'Direccion_Aprendiz'		=> ('X'),
			'Telefono_Aprendiz'		=> (1111),
			'Genero_Aprendiz'		=> ('X'),  
			'Email_Aprendiz'		=> ('william@gmail.com'),
			'Contraseña_Aprendiz'		=> bcrypt('123456'),
			'Eps'				=> ('X'),
			'Fk_IdFicha_Caracterizacion'	=> $Id_Ficha    
		
			


			
			));

		
	}

}