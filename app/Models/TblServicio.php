<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblServicio
 * 
 * @property int $cod_servicio
 * @property string $nombre_servicio
 * @property float $precio_servicio
 * @property Carbon $fecha_registro
 * @property string $estado_servicio
 * 
 * @property Collection|TblReporteFalla[] $tbl_reporte_fallas
 * @property Collection|TblSolicitude[] $tbl_solicitudes
 * @property Collection|TblVenta[] $tbl_ventas
 *
 * @package App\Models
 */
class TblServicio extends Model
{
	protected $table = 'tbl_servicios';
	protected $primaryKey = 'cod_servicio';
	public $timestamps = false;

	protected $casts = [
		'precio_servicio' => 'float'
	];

	protected $dates = [
		'fecha_registro'
	];

	protected $fillable = [
		'nombre_servicio',
		'precio_servicio',
		'fecha_registro',
		'estado_servicio'
	];

	public function tbl_reporte_fallas()
	{
		return $this->hasMany(TblReporteFalla::class, 'COD_SERVICIO');
	}

	public function tbl_solicitudes()
	{
		return $this->hasMany(TblSolicitude::class, 'COD_SERVICIO');
	}

	public function tbl_ventas()
	{
		return $this->hasMany(TblVenta::class, 'COD_SERVICIO');
	}
}
