<?php namespace SIGPT;

use Illuminate\Database\Eloquent\Model;

class Turista extends Model {

	protected $table = "turistas";
	protected $fillable = ['nombre', 'apellido', 'telefono', 'email','password'];

}
