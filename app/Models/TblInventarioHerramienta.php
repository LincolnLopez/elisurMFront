<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblInventarioHerramienta
 * 
 * @property int $COD_HERRAMIENTA
 * @property string $NOMBRE_HERRAMIENTA
 * @property string $DESCRIPCION_HERRAMIENTA
 * @property int $NUM_EXISTENCIA
 * @property Carbon $FECHA_INGRESO
 * @property Carbon $FECHA_MODIFICACION
 * @property int $COD_EMPLEADO
 * @property string $ESTADO
 * 
 * @property TblEmpleado $tbl_empleado
 *
 * @package App\Models
 */
class TblInventarioHerramienta extends Model
{
	protected $table = 'tbl_inventario_herramientas';
	protected $primaryKey = 'COD_HERRAMIENTA';
	public $timestamps = false;

	protected $casts = [
		'NUM_EXISTENCIA' => 'int',
		'COD_EMPLEADO' => 'int'
	];

	protected $dates = [
		'FECHA_INGRESO',
		'FECHA_MODIFICACION'
	];

	protected $fillable = [
		'NOMBRE_HERRAMIENTA',
		'DESCRIPCION_HERRAMIENTA',
		'NUM_EXISTENCIA',
		'FECHA_INGRESO',
		'FECHA_MODIFICACION',
		'COD_EMPLEADO',
		'ESTADO'
	];

	public function tbl_empleado()
	{
		return $this->belongsTo(TblEmpleado::class, 'COD_EMPLEADO');
	}
}
