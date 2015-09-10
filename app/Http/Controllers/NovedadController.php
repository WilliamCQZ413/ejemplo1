<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//extendemos hacia el modelo
use App\Models\Novedad as Novedad;

<<<<<<< HEAD
use App\Models\Asesor as Asesor;
=======
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
use Illuminate\Http\Request;

class NovedadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function index(Request $request)
	{
		$novedades = Novedad::name($request->get('name'))->orderBy('Tipo_Novedad','asc')->paginate(5);
		return \View::make('Novedades/list', compact('novedades'));
=======
	public function index()
	{
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
<<<<<<< HEAD
		$asesor = ['asesor' => Asesor::lists('Nombre_Asesor','id')];
	
		return \View::make('Novedades/new')->with('asesor', $asesor);
	
=======
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function store(Request $request)
	{
		
		$novedad = new Novedad;
		$novedad->create($request->all());
		return redirect('novedad');
=======
	public function store()
	{
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
<<<<<<< HEAD
		
=======
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
<<<<<<< HEAD
	{	
		$asesor = ['asesor' => Asesor::lists('Nombre_asesor','id')];
		$novedades = Novedad::find($id);
		return \View::make('Novedades/update',compact('novedades','asesor'));
=======
	{
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function update(Request $request)
	{
		$novedades = Novedad::find($request->id);
		$novedades->Tipo_Novedad = $request->Tipo_Novedad;
		$novedades->Descripcion = $request->Descripcion;
		
		
		
		$novedades->save();
		return redirect('novedad');
=======
	public function update($id)
	{
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
<<<<<<< HEAD
		$novedad = Novedad::find($id);
		$novedad->delete();
		return redirect()->back();
=======
		//
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	}

}
