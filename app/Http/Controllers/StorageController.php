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
	public function index2()
	{
		$id=1;
		$usuario=\SIGPT\Proveedor::find($id);
		$tipos =\DB::table('tipo_documento')->lists('tipo_documento', 'id');
		//$tipos= array(0 => "Seleccione ... ") + $tipos;
		$selected = array();
		$mensaje="";
		$RNT=  \DB::table('documento')->where('id_actor', $id)->where('id_tipo_documento', 1)->first();
		$RM=  \DB::table('documento')->where('id_actor', $id)->where('id_tipo_documento', 2)->first();
		return view('comun.documentos', compact('usuario', 'RNT', 'RM'), compact('tipos', 'selected'))->with('mensaje', $mensaje);
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
		$imagen=\SIGPT\imagen::find($id);
		return view('comun.EditarGaleria', ['imagen' => $imagen]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$data  = $request->all();
		$rules = array(
			'file' 			=> 'mimes:jpeg,png|max:760|unique:imagen,ruta',
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
		$imagen=\SIGPT\imagen::find($id);
		//\Storage::delete(public_path().'\storage\imagenes\\'.$imagen->ruta);

		$imagen->fill($request->all());
		if($request->file('file')){
			$file = $request->file('file');
       		$nombre = $file->getClientOriginalName();
       		\Storage::disk('imagenes')->put($nombre,  \File::get($file));
       		$imagen->ruta = $nombre;
       	}
		$imagen->save();
		
		
		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		documento::destroy($id);
		return "elimina".$id;
	}
	public function eliminarDoc($id)
	{
		return "elimina".$id;
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
       \Storage::disk('imagenes')->put($nombre,  \File::get($file));
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
public function saveDocumento(Request $request)
{
		//sesion de usuario
		$id=1;
		$usuario=\SIGPT\Proveedor::find($id);
		//VALIDACIONES DE CAMPO
 		$data  = $request->all();
		$rules = array(
			'tipo' 			=> 'required',//|exists:tipo_documento,tipo_documento',
			'certificado'	=> 'mimes:pdf|max:760'
			);
		$validator=\Validator::make($data, $rules);

		if ($validator->fails()){
			//dd($validator->errors());
			return redirect()->back()
			->withErrors($validator->errors())
			->withInput();

		}
		$RNT=  \DB::table('documento')->where('id_actor', $id)->where('id_tipo_documento', 1)->first();
		$RM=  \DB::table('documento')->where('id_actor', $id)->where('id_tipo_documento', 2)->first();
	    $file = $request->file('certificado');
	    $nombre = $file->getClientOriginalName();
	    
	    //SI NO EXISTEN
		if(($request['tipo']==1 && !$RNT) || ($request['tipo']==2 && !$RM)){
			\SIGPT\documento::create([
			'id_actor'			=> 1,
			'id_tipo_documento' => $request['tipo'],
			'ruta'				=> $nombre
			]);
			$usuario->calificacion=$usuario->calificacion+1;
			$usuario->save();
		}
		//SI EXISTEN
		if(($request['tipo']==1 && $RNT) || ($request['tipo']==2 && $RM)){
			$id_certificado=\DB::table('documento')->where('id_actor', $id)->where('id_tipo_documento', $request['tipo'])->pluck('id');
			$certificado=\DB::table('documento')->where('id_actor', $id)->where('id_tipo_documento', $request['tipo'])->first();
			unlink(public_path().'/storage/documentos/'.$usuario->correo.'/'.$certificado->ruta);
			$certificado=\SIGPT\documento::find($id_certificado);
			$certificado->ruta=$nombre;
			$certificado->save();
		}
		//GUARDAR EN SERVIDOR
	    \Storage::disk('documentos')->put($nombre, \File::get($file));
	    $directorio = "storage\documentos\\".$usuario->correo;
	    if(!file_exists ( $directorio )){ 
			$dirmake = mkdir("$directorio", 0777);
		}
		//MOVER A CARPETA DE USUARIO
		rename (public_path().'/storage/documentos/'.$nombre ,public_path().'/storage/documentos/'.$usuario->correo.'/'.$nombre);
		//CONSULTAS PARA FORMULARIO
	    $tipos =\DB::table('tipo_documento')->lists('tipo_documento', 'id');
		$selected = array();
	 	$mensaje="Se agregó". $request['tipo']. "exitosamente";
 		
 		//return view('comun.documentos', compact('tipos', 'selected'))->with('mensaje', $mensaje);
 		return redirect()->back()->with('mensaje', $mensaje);
}

}
