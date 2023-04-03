<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblVenta
 * 
 * @property int $cod_venta
 * @property Carbon|null $fecha_venta
 * @property int $COD_SERVICIO
 * @property int $cod_cliente
 * @property int $cod_usuario
 * @property int $cod_estado
 * 
 * @property TblCliente $tbl_cliente
 * @property TblEstado $tbl_estado
 * @property TblUsuario $tbl_usuario
 * @property TblServicio $tbl_servicio
 * @property Collection|TblVentasDetalle[] $tbl_ventas_detalles
 *
 * @package App\Models
 */
class TblVenta extends Model
{
	protected $table = 'tbl_ventas';
	protected $primaryKey = 'cod_venta';
	public $timestamps = false;

	protected $casts = [
		'COD_SERVICIO' => 'int',
		'cod_cliente' => 'int',
		'cod_usuario' => 'int',
		'cod_estado' => 'int'
	];

	protected $dates = [
		'fecha_venta'
	];

	protected $fillable = [
		'fecha_venta',
		'COD_SERVICIO',
		'cod_cliente',
		'cod_usuario',
		'cod_estado'
	];

	public function tbl_cliente()
	{
		return $this->belongsTo(TblCliente::class, 'cod_cliente');
	}

	public function tbl_estado()
	{
		return $this->belongsTo(TblEstado::class, 'cod_estado');
	}

	public function tbl_usuario()
	{
		return $this->belongsTo(TblUsuario::class, 'cod_usuario');
	}

	public function tbl_servicio()
	{
		return $this->belongsTo(TblServicio::class, 'COD_SERVICIO');
	}

	public function tbl_ventas_detalles()
	{
		return $this->hasMany(TblVentasDetalle::class, 'cod_venta');
	}
}
