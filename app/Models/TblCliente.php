<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCliente
 * 
 * @property int $cod_cliente
 * @property string $dni_cliente
 * @property string $nombre_cliente
 * @property string $apellidos_cliente
 * @property string $direccion_cliente
 * @property string $rtn_cliente
 * @property string $telefono_cliente
 * @property string $correo_cliente
 * @property Carbon $fecha_registro
 * @property string $estado_cliente
 * @property int $cod_tipo_cliente
 * 
 * @property TblTiposCliente $tbl_tipos_cliente
 * @property Collection|TblVenta[] $tbl_ventas
 *
 * @package App\Models
 */
class TblCliente extends Model
{
	protected $table = 'tbl_clientes';
	protected $primaryKey = 'cod_cliente';
	public $timestamps = false;

	protected $casts = [
		'cod_tipo_cliente' => 'int'
	];

	protected $dates = [
		'fecha_registro'
	];

	protected $fillable = [
		'dni_cliente',
		'nombre_cliente',
		'apellidos_cliente',
		'direccion_cliente',
		'rtn_cliente',
		'telefono_cliente',
		'correo_cliente',
		'fecha_registro',
		'estado_cliente',
		'cod_tipo_cliente'
	];

	public function tbl_tipos_cliente()
	{
		return $this->belongsTo(TblTiposCliente::class, 'cod_tipo_cliente');
	}

	public function tbl_ventas()
	{
		return $this->hasMany(TblVenta::class, 'cod_cliente');
	}
}
