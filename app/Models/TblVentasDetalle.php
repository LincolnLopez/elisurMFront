<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblVentasDetalle
 * 
 * @property int $cod_venta_detalle
 * @property int $cod_venta
 * @property string $DESCRIPCION
 * @property float $precio
 * 
 * @property TblVenta $tbl_venta
 *
 * @package App\Models
 */
class TblVentasDetalle extends Model
{
	protected $table = 'tbl_ventas_detalle';
	protected $primaryKey = 'cod_venta_detalle';
	public $timestamps = false;

	protected $casts = [
		'cod_venta' => 'int',
		'precio' => 'float'
	];

	protected $fillable = [
		'cod_venta',
		'DESCRIPCION',
		'precio'
	];

	public function tbl_venta()
	{
		return $this->belongsTo(TblVenta::class, 'cod_venta');
	}
}
