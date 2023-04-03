<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblComprasArticulo
 * 
 * @property int $cod_compra_articulo
 * @property int $cod_compra
 * @property int $cod_articulo
 * @property int $cantidad_articulo
 * @property float $precio_articulo
 * @property float $total_articulo
 * 
 * @property TblArticulo $tbl_articulo
 * @property TblCompra $tbl_compra
 *
 * @package App\Models
 */
class TblComprasArticulo extends Model
{
	protected $table = 'tbl_compras_articulos';
	protected $primaryKey = 'cod_compra_articulo';
	public $timestamps = false;

	protected $casts = [
		'cod_compra' => 'int',
		'cod_articulo' => 'int',
		'cantidad_articulo' => 'int',
		'precio_articulo' => 'float',
		'total_articulo' => 'float'
	];

	protected $fillable = [
		'cod_compra',
		'cod_articulo',
		'cantidad_articulo',
		'precio_articulo',
		'total_articulo'
	];

	public function tbl_articulo()
	{
		return $this->belongsTo(TblArticulo::class, 'cod_articulo');
	}

	public function tbl_compra()
	{
		return $this->belongsTo(TblCompra::class, 'cod_compra');
	}
}
