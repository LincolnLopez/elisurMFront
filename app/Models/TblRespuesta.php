<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblRespuesta
 * 
 * @property int $cod_respuesta
 * @property int $cod_pregunta
 * @property string $respuesta
 * @property Carbon $fecha_creacion
 * 
 * @property TblEncuestum $tbl_encuestum
 *
 * @package App\Models
 */
class TblRespuesta extends Model
{
	protected $table = 'tbl_respuestas';
	protected $primaryKey = 'cod_respuesta';
	public $timestamps = false;

	protected $casts = [
		'cod_pregunta' => 'int'
	];

	protected $dates = [
		'fecha_creacion'
	];

	protected $fillable = [
		'cod_pregunta',
		'respuesta',
		'fecha_creacion'
	];

	public function tbl_encuestum()
	{
		return $this->belongsTo(TblEncuestum::class, 'cod_pregunta');
	}
}
