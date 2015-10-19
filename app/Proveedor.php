<?php namespace SIGPT;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

	protected $table = "empresa_turistica";
	protected $fillable = [	'id_rol_empresa', 
							'descripcion', 
							'nombre',
							'nit',
							'nombre_representante',
							'apellido',
							'cedula',
							'correo',
							'clave',
							'certificado_rnt',
							'registro mercantil',
							'ubicacion',
							'calificacion'
							];

}
