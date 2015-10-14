<?php namespace SIGPT\Http\Controllers;

use SIGPT\Http\Requests;
use SIGPT\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StorageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$imagenes =\SIGPT\imagen::All();
		$mensaje="";
		return view('comun.galeria', compact('imagenes'))->with('mensaje', $mensaje);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
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
	public function save(Request $request)
{
 	$data  = $request->all();
		$rules = array(
			'file' 			=> 'mimes:jpeg,png|required|max:760|unique:imagen,nombre',
			'nombre'		=> 'required|max:20',
			'descripcion'	=> 'max:50'
			);
		$validator=\Validator::make($data, $rules);

		if ($validator->fails()){
			//dd($validator->errors());
			return redirect()->back()
			->withErrors($validator->errors())
			->withInput();

		}
       //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
       \SIGPT\imagen::create([
			'id_actor'		=> 1,
			'ruta'			=> $nombre,
			'nombre'		=> $request['nombre'],
			'descripcion'	=> $request['descripcion']
			]);
 		$mensaje="Se agregó". $request['nombre']. "exitosamente";
       $imagenes =\SIGPT\imagen::All();
		return redirect()->back();//view('comun.galeria', compact('imagenes'))->with('mensaje', $mensaje);
}

}
