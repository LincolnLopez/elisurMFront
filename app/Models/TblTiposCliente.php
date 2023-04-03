<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblTiposCliente
 * 
 * @property int $cod_tipo_cliente
 * @property string $nombre_tipo_cliente
 * @property Carbon $fecha_registro
 * @property string $ESTADO
 * 
 * @property Collection|TblCliente[] $tbl_clientes
 *
 * @package App\Models
 */
class TblTiposCliente extends Model
{
	protected $table = 'tbl_tipos_clientes';
	protected $primaryKey = 'cod_tipo_cliente';
	public $timestamps = false;

	protected $dates = [
		'fecha_registro'
	];

	protected $fillable = [
		'nombre_tipo_cliente',
		'fecha_registro',
		'ESTADO'
	];

	public function tbl_clientes()
	{
		return $this->hasMany(TblCliente::class, 'cod_tipo_cliente');
	}
}
