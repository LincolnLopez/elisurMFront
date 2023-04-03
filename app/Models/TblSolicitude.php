<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSolicitude
 * 
 * @property int $COD_SOLICITUD
 * @property Carbon $FECHA_SOLICITUD
 * @property string $NOMBRE
 * @property string|null $APELLIDO
 * @property string $TELEFONO
 * @property string $CORREO_ELECTRONICO
 * @property string $TIPO_SOLICITANTE
 * @property string $TELEFONO_OPCIONAL
 * @property string $DIRECCION_SOLICITANTE
 * @property string|null $NOMBRE_E_C
 * @property string|null $RTN_DNI
 * @property string $CIUDAD
 * @property int $COD_SERVICIO
 * @property string $DESCRIPCION_SOLICITUD
 * @property int $COD_ESTADO
 * 
 * @property TblServicio $tbl_servicio
 * @property TblEstado $tbl_estado
 *
 * @package App\Models
 */
class TblSolicitude extends Model
{
	protected $table = 'tbl_solicitudes';
	protected $primaryKey = 'COD_SOLICITUD';
	public $timestamps = false;

	protected $casts = [
		'COD_SERVICIO' => 'int',
		'COD_ESTADO' => 'int'
	];

	protected $dates = [
		'FECHA_SOLICITUD'
	];

	protected $fillable = [
		'FECHA_SOLICITUD',
		'NOMBRE',
		'APELLIDO',
		'TELEFONO',
		'CORREO_ELECTRONICO',
		'TIPO_SOLICITANTE',
		'TELEFONO_OPCIONAL',
		'DIRECCION_SOLICITANTE',
		'NOMBRE_E_C',
		'RTN_DNI',
		'CIUDAD',
		'COD_SERVICIO',
		'DESCRIPCION_SOLICITUD',
		'COD_ESTADO'
	];

	public function tbl_servicio()
	{
		return $this->belongsTo(TblServicio::class, 'COD_SERVICIO');
	}

	public function tbl_estado()
	{
		return $this->belongsTo(TblEstado::class, 'COD_ESTADO');
	}
}
