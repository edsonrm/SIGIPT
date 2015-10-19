<?php namespace SIGPT;

use Illuminate\Database\Eloquent\Model;

class documento extends Model {

	protected $table = "documento";
	protected $fillable = ['id_actor', 'id_tipo_documento','ruta'];

}
