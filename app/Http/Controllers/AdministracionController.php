<?php namespace SIGPT\Http\Controllers;

use SIGPT\Http\Requests;
use SIGPT\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class AdministracionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$municipios =\DB::table('municipio')->orderBy('nombreMunicipio', 'asc')->lists('nombreMunicipio', 'nombreMunicipio');
		$municipios= array(0 => "Seleccione ... ") + $municipios;
		$selected = array();
		return view('administracion.create', compact('municipios', 'selected'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$data  = $request->all();
		$rules = array(
			'nombre' 			=> 'required|exists:municipio,nombreMunicipio|unique:administracions,nombre_administracion',
			'email'     		=> 'required|email|unique:administracions', 
			'clave'				=> 'required|min:6|confirmed',
			//'clave_confirmation'=> 'required|min:6',
			'acepto'			=> 'accepted'
			);
		$validator=\Validator::make($data, $rules);

		if ($validator->fails()){
			//dd($validator->errors());
			return redirect()->back()
			->withErrors($validator->errors())
			->withInput();

		}

		\SIGPT\Administracion::create([
			'nombre_administracion' 	=> $request['nombre'],
			'email'	 					=> $request['email'],
			'password'					=> bcrypt($request['clave'])
			]);
		$municipios =\DB::table('municipio')->orderBy('nombreMunicipio', 'asc')->lists('nombreMunicipio', 'nombreMunicipio');
		$municipios= array(0 => "Seleccione ... ") + $municipios;
		$selected = array();
		return view('administracion.create', compact('municipios', 'selected'));
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
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
		//
	}

}
