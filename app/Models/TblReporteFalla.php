<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblReporteFalla
 * 
 * @property int $COD_REPORTE_FALLA
 * @property int $COD_SERVICIO
 * @property string $NOMBRE
 * @property string $TELEFONO
 * @property string $CORREO_ELECTRONICO
 * @property string $TEMA
 * @property string $DESCRIPCION
 * @property string $UBICACION
 * @property Carbon $FECHA_CREACION
 * @property Carbon $FECHA_MODIFICACION
 * @property string $cod_estado
 * @property string|null $nombre_empleado
 * 
 * @property TblServicio $tbl_servicio
 *
 * @package App\Models
 */
class TblReporteFalla extends Model
{
	protected $table = 'tbl_reporte_fallas';
	protected $primaryKey = 'COD_REPORTE_FALLA';
	public $timestamps = false;

	protected $casts = [
		'COD_SERVICIO' => 'int'
	];

	protected $dates = [
		'FECHA_CREACION',
		'FECHA_MODIFICACION'
	];

	protected $fillable = [
		'COD_SERVICIO',
		'NOMBRE',
		'TELEFONO',
		'CORREO_ELECTRONICO',
		'TEMA',
		'DESCRIPCION',
		'UBICACION',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'cod_estado',
		'nombre_empleado'
	];

	public function tbl_servicio()
	{
		return $this->belongsTo(TblServicio::class, 'COD_SERVICIO');
	}
}
