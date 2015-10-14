<?php namespace SIGPT\Http\Controllers;

use SIGPT\Http\Requests;
use SIGPT\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProveedorController extends Controller {

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
		$roles =\DB::table('rol')->lists('rol', 'id');
		$roles= array(0 => "Seleccione ... ") + $roles;
		$selected2 = array();
		$mensaje="Registra tus datos";
		return view('proveedor.create', compact('municipios', 'selected'), compact('roles', 'selected2'))->with('mensaje', $mensaje);
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
			'rol' 						=> 'required|exists:rol,id',
			'descripcion_empresa' 		=> 'required|min:5|max:255',
			'nombre_empresa'			=> 'required|min:5|max:20|alpha_num',
			'nit'						=> 'required|min:5|max:20|alpha_num',
			'nombre_representante'		=> 'required|min:5|max:20|alpha_num',	
			'apellido_representante'	=> 'required|min:5|max:20|alpha_num',
			'cedula'					=> 'required|max:20',
			'email'     				=> 'required|email|unique:proveedor,correo',
			'clave'						=> 'required|min:6|confirmed',
			'clave_confirmation'		=> 'required|min:6',
			'ubicacion'					=> 'required|exists:municipio,nombreMunicipio',
			'acepto'					=> 'accepted'
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
			$message->to($request->email, $request->nombre_representante);
		});
		
		\SIGPT\Proveedor::create([				
			'id_rol' 				=> $request['rol'],
			'descripcion' 			=> $request['descripcion_empresa'],
			'nombre_proveedor'		=> $request['nombre_empresa'],
			'nit'					=> $request['nit'],
			'nombre_representante'	=> $request['nombre_representante'],
			'apellido'				=> $request['apellido_representante'],
			'cedula'				=> $request['cedula'],
			'correo'				=> $request['email'],
			'clave'					=> bcrypt($request['clave']),
			'ubicacion'				=> $request['ubicacion'],
			]);
		$roles =\DB::table('rol')->lists('rol', 'id');
		$roles= array(0 => "Seleccione ... ") + $roles;
		$selected2 = array();
		$municipios =\DB::table('municipio')->orderBy('nombreMunicipio', 'asc')->lists('nombreMunicipio', 'nombreMunicipio');
		$municipios= array(0 => "Seleccione ... ") + $municipios;
		$selected = array();
		$mensaje="Se te ha enviado un correo de confirmacion";//"Registrado con exito";
		return view('proveedor.create', compact('municipios', 'selected'), compact('roles', 'selected2'))->with('mensaje', $mensaje);
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
