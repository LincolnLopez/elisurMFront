<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblEmpleado
 * 
 * @property int $cod_empleado
 * @property string $DNI_EMPLEADO
 * @property string $nombre_empleado
 * @property string $apellidos_empleado
 * @property string $sexo_empleado
 * @property string $estado_civil_empleado
 * @property int $edad_empleado
 * @property string $telefono
 * @property string $correo
 * @property string|null $estado_empleado
 * 
 * @property Collection|TblInventarioHerramienta[] $tbl_inventario_herramientas
 *
 * @package App\Models
 */
class TblEmpleado extends Model
{
	protected $table = 'tbl_empleados';
	protected $primaryKey = 'cod_empleado';
	public $timestamps = false;

	protected $casts = [
		'edad_empleado' => 'int'
	];

	protected $fillable = [
		'DNI_EMPLEADO',
		'nombre_empleado',
		'apellidos_empleado',
		'sexo_empleado',
		'estado_civil_empleado',
		'edad_empleado',
		'telefono',
		'correo',
		'estado_empleado'
	];

	public function tbl_inventario_herramientas()
	{
		return $this->hasMany(TblInventarioHerramienta::class, 'COD_EMPLEADO');
	}
}
