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
	/*	$turistas = Turista::all()->lists('id', 'username');
		$selected = array();
		return view('turista.create', compact('turistas', 'selected'));*/
		$municipios =\DB::table('municipio')->orderBy('nombreMunicipio', 'asc')->lists('nombreMunicipio', 'nombreMunicipio');
		$municipios= array(0 => "Seleccione ... ") + $municipios;
		$selected = array();
		$mensaje="Registra tus datos";
		return view('turista.create', compact('municipios', 'selected'))->with('mensaje', $mensaje);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$data=$request->all();		
		
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
		$ruta=\Hash::make($request['email']);
		$cuerpo_mensaje=[
		'titulo' 	=> 'Debes confirmar el registro a SIGIP.com entrando en el siguiente link: ',
		'contenido' => 'sigpt.dev/finRegistro/'.$ruta
		];
		\Mail::send('emails.msgCinfirmacion', $cuerpo_mensaje, function($message) use ($request){
			$message->from(env('CONTACT_MAIL'), env('CONTACT_NAME'));
			$message->subject('Confirmacón registro SIGIPT');
			$message->to($request->email, $request->nombre);
		});
		$municipios =\DB::table('municipio')->orderBy('nombreMunicipio', 'asc')->lists('nombreMunicipio', 'nombreMunicipio');
		$municipios= array(0 => "Seleccione ... ") + $municipios;
		$selected = array();
		$mensaje="Se te ha enviado un correo de confirmacion";//"Registrado con exito";
		\SIGPT\Turista::create([
			'nombre'				 	=> $request['nombre'],
			'apellido'				 	=> $request['apellido'],
			'telefono'				 	=> $request['telefono'],
			'email'	 					=> $request['email'],
			'password'					=> bcrypt($request['clave'])
			]);
		return view('turista.create', compact('municipios', 'selected'))->with('mensaje', $mensaje);
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
