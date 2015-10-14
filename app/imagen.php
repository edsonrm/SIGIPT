<?php namespace SIGPT;

use Illuminate\Database\Eloquent\Model;

class imagen extends Model {

	protected $table = "imagen";
	protected $fillable = ['id_actor','ruta', 'nombre', 'descripcion'];

}
