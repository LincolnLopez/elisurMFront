<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblPermiso
 * 
 * @property int $cod_permiso
 * @property int $cod_rol
 * @property int $editar_usuarios
 * @property int $ver_inventario
 * @property int $asignar_trabajo
 * @property int $cerrar_actividad_asignada
 * @property int $solicitar_presupuesto
 * @property int $generar_reportes
 * @property int $reportes_fallas
 * 
 * @property TblRole $tbl_role
 *
 * @package App\Models
 */
class TblPermiso extends Model
{
	protected $table = 'tbl_permisos';
	protected $primaryKey = 'cod_permiso';
	public $timestamps = false;

	protected $casts = [
		'cod_rol' => 'int',
		'editar_usuarios' => 'int',
		'ver_inventario' => 'int',
		'asignar_trabajo' => 'int',
		'cerrar_actividad_asignada' => 'int',
		'solicitar_presupuesto' => 'int',
		'generar_reportes' => 'int',
		'reportes_fallas' => 'int'
	];

	protected $fillable = [
		'cod_rol',
		'editar_usuarios',
		'ver_inventario',
		'asignar_trabajo',
		'cerrar_actividad_asignada',
		'solicitar_presupuesto',
		'generar_reportes',
		'reportes_fallas'
	];

	public function tbl_role()
	{
		return $this->belongsTo(TblRole::class, 'cod_rol');
	}
}
