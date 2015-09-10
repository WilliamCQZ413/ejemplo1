<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//extendemos hacia el modelo
use App\Models\Evidencia as Evidencia;
<<<<<<< HEAD
use App\Models\Aprendiz as Aprendiz;
=======

use App\Models\Aprendiz as Aprendiz;


>>>>>>> 3bf38e7ca71592bde9ad09494c4065905245c3a5
use Illuminate\Http\Request;

class EvidenciaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index(Request $request)
	{	
		$evidencias = Evidencia::nombre($request->get('nombre'))->orderBy('Nombre_Evidencia','asc')->paginate(4);
		return \View::make('Evidencias/list', compact('evidencias'));

	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
<<<<<<< HEAD
	{	
		$aprendiz = ['aprendiz' => Aprendiz::lists('Nombre_Aprendiz','id')];
		return \View::make('Evidencias/new')->with('aprendiz');
=======

	{	
		$aprendiz = ['aprendiz' => Aprendiz::lists('Nombre_Aprendiz','id')];
		return \View::make('Evidencias/new')->with('aprendiz');

	{
		//

>>>>>>> 3bf38e7ca71592bde9ad09494c4065905245c3a5
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$evidencia = new Evidencia;
		$evidencia->create($request->all());
		return redirect('evidencia');

	public function store()
	{
		//

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$evidencias = Evidencia::find($id);
		return \View::make('Evidencias/update',compact('evidencias'));

		//

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function update(Request $request)
	{
		$evidencias = Evidencia::find($request->id);
		$evidencias->Nombre_Evidencia = $request->Nombre_Evidencia;
		$evidencias->Archivo_Evidencia = $request->Archivo_Evidencia;
		$evidencias->Fk_IdAprendiz_Actividad = $request->Fk_IdAprendiz_Actividad;

		$evidencias->save();
		return redirect('lugar');

	public function update($id)
	{
		//

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	
	}

	public function search(Request $request){

		$evidencias = Lugar::where('Nombre_Evidencia','like','%'.$request->Nombre.'%')->get();
		return \View::make('Evidencias/list', compact('evidencias'));

	}

		//
	}

}
