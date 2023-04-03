<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblBitacora
 * 
 * @property int $cod_bitacora
 * @property string $usuario
 * @property string $operacion
 * @property Carbon $modificado
 * @property string $tabla
 *
 * @package App\Models
 */
class TblBitacora extends Model
{
	protected $table = 'tbl_bitacora';
	protected $primaryKey = 'cod_bitacora';
	public $timestamps = false;

	protected $dates = [
		'modificado'
	];

	protected $fillable = [
		'usuario',
		'operacion',
		'modificado',
		'tabla'
	];
}
