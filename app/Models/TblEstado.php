<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblEstado
 * 
 * @property int $cod_estado
 * @property string $nombre_estado
 * @property Carbon $fecha_registro
 * 
 * @property Collection|TblSolicitude[] $tbl_solicitudes
 * @property Collection|TblVenta[] $tbl_ventas
 *
 * @package App\Models
 */
class TblEstado extends Model
{
	protected $table = 'tbl_estados';
	protected $primaryKey = 'cod_estado';
	public $timestamps = false;

	protected $dates = [
		'fecha_registro'
	];

	protected $fillable = [
		'nombre_estado',
		'fecha_registro'
	];

	public function tbl_solicitudes()
	{
		return $this->hasMany(TblSolicitude::class, 'COD_ESTADO');
	}

	public function tbl_ventas()
	{
		return $this->hasMany(TblVenta::class, 'cod_estado');
	}
}
