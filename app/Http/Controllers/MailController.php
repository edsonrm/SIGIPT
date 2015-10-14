<?php namespace SIGPT\Http\Controllers;

use SIGPT\Http\Requests;
use SIGPT\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('comun.contact');
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
	public function send(Request $request)
	{
		$data=$request->all();		
		\Mail::send('emails.message', $data, function($message) use ($request){
			$message->from($request->email, $request->name);
			$message->subject($request->subject);
			$message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
			//$message->to('danielforero93@gmail.com', env('CONTACT_NAME'));
		});
		return view('comun.success')->with('mensaje', $mensaje);
	}
	

}
