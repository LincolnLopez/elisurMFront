<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCompra
 * 
 * @property int $cod_compra
 * @property string $descripcion_compra
 * @property Carbon $fecha_compra
 * @property int $cod_proveedor
 * 
 * @property TblProveedore $tbl_proveedore
 * @property Collection|TblComprasArticulo[] $tbl_compras_articulos
 *
 * @package App\Models
 */
class TblCompra extends Model
{
	protected $table = 'tbl_compras';
	protected $primaryKey = 'cod_compra';
	public $timestamps = false;

	protected $casts = [
		'cod_proveedor' => 'int'
	];

	protected $dates = [
		'fecha_compra'
	];

	protected $fillable = [
		'descripcion_compra',
		'fecha_compra',
		'cod_proveedor'
	];

	public function tbl_proveedore()
	{
		return $this->belongsTo(TblProveedore::class, 'cod_proveedor');
	}

	public function tbl_compras_articulos()
	{
		return $this->hasMany(TblComprasArticulo::class, 'cod_compra');
	}
}
