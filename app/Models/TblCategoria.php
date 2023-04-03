<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCategoria
 * 
 * @property int $cod_categoria
 * @property string $nombre_categoria
 * @property Carbon $fecha_registro
 * 
 * @property Collection|TblArticulo[] $tbl_articulos
 *
 * @package App\Models
 */
class TblCategoria extends Model
{
	protected $table = 'tbl_categorias';
	protected $primaryKey = 'cod_categoria';
	public $timestamps = false;

	protected $dates = [
		'fecha_registro'
	];

	protected $fillable = [
		'nombre_categoria',
		'fecha_registro'
	];

	public function tbl_articulos()
	{
		return $this->hasMany(TblArticulo::class, 'cod_categoria');
	}
}
