<?php namespace SIGPT;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

	protected $table = "proveedor";
	protected $fillable = [	'id_rol', 
							'descripcion', 
							'nombre_proveedor',
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
