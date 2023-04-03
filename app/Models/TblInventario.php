<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblInventario
 * 
 * @property int $cod_inventario
 * @property int $cod_articulo
 * @property int $cantidad_articulo
 * @property Carbon $fecha_registro
 * @property Carbon $fecha_modificacion
 * @property string $estado
 * 
 * @property TblArticulo $tbl_articulo
 *
 * @package App\Models
 */
class TblInventario extends Model
{
	protected $table = 'tbl_inventarios';
	protected $primaryKey = 'cod_inventario';
	public $timestamps = false;

	protected $casts = [
		'cod_articulo' => 'int',
		'cantidad_articulo' => 'int'
	];

	protected $dates = [
		'fecha_registro',
		'fecha_modificacion'
	];

	protected $fillable = [
		'cod_articulo',
		'cantidad_articulo',
		'fecha_registro',
		'fecha_modificacion',
		'estado'
	];

	public function tbl_articulo()
	{
		return $this->belongsTo(TblArticulo::class, 'cod_articulo');
	}
}
