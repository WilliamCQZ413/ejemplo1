<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model {

	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'novedads';
	protected $fillable =['Tipo_Novedad','Descripcion','Fk_Asesor_Evento'];
	protected $guarded =['id'];


}
