<?php namespace SIGPT;

use Illuminate\Database\Eloquent\Model;

class Administracion extends Model {

	protected $table = "administracions";
	protected $fillable = ['nombre_administracion', 'email', 'password'];

}
