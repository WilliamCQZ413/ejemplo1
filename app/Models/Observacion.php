<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model {

	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'observacions';
	protected $fillable =['Fecha_Obs','Descripcion_Obs','NumeroSesiones_Obs','Fk_IdCita'];
	protected $guarded =['id'];

}
