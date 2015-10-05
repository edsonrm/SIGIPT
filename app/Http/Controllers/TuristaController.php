<?php namespace SIGPT\Http\Controllers;

use SIGPT\Http\Requests;
use SIGPT\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class TuristaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$result=\DB::table('turistas')->get();
		dd($result);
		return $result;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('turista.create');
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
			'nombre' 			=> 'required|min:5|max:20|alpha_num',
			'apellido' 			=> 'required|min:5|max:20|alpha_num',
			'telefono' 			=> 'required|digits:10',
			'email'     		=> 'required|email|unique:turistas', 
			'clave'				=> 'required|min:6|confirmed',
			'clave_confirmation'=> 'required|min:6',
			'acepto'			=> 'accepted'
			);
		$validator=\Validator::make($data, $rules);

		if ($validator->fails()){
			//dd($validator->errors());
			return redirect()->back()
			->withErrors($validator->errors())
			->withInput();

		}

		\SIGPT\Turista::create([
			'nombre'				 	=> $request['nombre'],
			'apellido'				 	=> $request['apellido'],
			'telefono'				 	=> $request['telefono'],
			'email'	 					=> $request['email'],
			'password'					=> bcrypt($request['clave'])
			]);
		return "Turista registrado";
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
