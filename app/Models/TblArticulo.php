<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblArticulo
 * 
 * @property int $cod_articulo
 * @property string $nombre_articulo
 * @property string $descripcion_articulo
 * @property float $precio_articulo
 * @property string $estado_articulo
 * @property Carbon $fecha_registro
 * @property int $cod_categoria
 * 
 * @property TblCategoria $tbl_categoria
 * @property Collection|TblComprasArticulo[] $tbl_compras_articulos
 * @property Collection|TblInventario[] $tbl_inventarios
 *
 * @package App\Models
 */
class TblArticulo extends Model
{
	protected $table = 'tbl_articulos';
	protected $primaryKey = 'cod_articulo';
	public $timestamps = false;

	protected $casts = [
		'precio_articulo' => 'float',
		'cod_categoria' => 'int'
	];

	protected $dates = [
		'fecha_registro'
	];

	protected $fillable = [
		'nombre_articulo',
		'descripcion_articulo',
		'precio_articulo',
		'estado_articulo',
		'fecha_registro',
		'cod_categoria'
	];

	public function tbl_categoria()
	{
		return $this->belongsTo(TblCategoria::class, 'cod_categoria');
	}

	public function tbl_compras_articulos()
	{
		return $this->hasMany(TblComprasArticulo::class, 'cod_articulo');
	}

	public function tbl_inventarios()
	{
		return $this->hasMany(TblInventario::class, 'cod_articulo');
	}
}
