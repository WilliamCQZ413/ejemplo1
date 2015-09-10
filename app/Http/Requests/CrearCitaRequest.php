<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrearCitaRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [

		'Fecha_Cita'	=> 'required',	
		'Hora_Cita'		=> 'required',		
		'Estado_Cita'	=> 'required|',
			
		'Fk_IdLugar'	=> 'required',
		'Fk_IdAsesor'	=> 'required'
			//
		];
	}

}
