<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblProveedore
 * 
 * @property int $cod_proveedor
 * @property string $nombre_proveedor
 * @property string $banco_proveedor
 * @property string $cuenta_proveedor
 * @property int $telefono_proveedor
 * @property int $extension_proveedor
 * @property int $celular_proveedor
 * @property string $contacto_proveedor
 * @property string $cargo_contacto
 * @property string $direccion_proveedor
 * @property string $pais_proveedor
 * @property string $ciudad_proveedor
 * @property string $correo_proveedor
 * @property Carbon $fecha_registro
 * @property string $estado_proveedor
 * 
 * @property Collection|TblCompra[] $tbl_compras
 *
 * @package App\Models
 */
class TblProveedore extends Model
{
	protected $table = 'tbl_proveedores';
	protected $primaryKey = 'cod_proveedor';
	public $timestamps = false;

	protected $casts = [
		'telefono_proveedor' => 'int',
		'extension_proveedor' => 'int',
		'celular_proveedor' => 'int'
	];

	protected $dates = [
		'fecha_registro'
	];

	protected $fillable = [
		'nombre_proveedor',
		'banco_proveedor',
		'cuenta_proveedor',
		'telefono_proveedor',
		'extension_proveedor',
		'celular_proveedor',
		'contacto_proveedor',
		'cargo_contacto',
		'direccion_proveedor',
		'pais_proveedor',
		'ciudad_proveedor',
		'correo_proveedor',
		'fecha_registro',
		'estado_proveedor'
	];

	public function tbl_compras()
	{
		return $this->hasMany(TblCompra::class, 'cod_proveedor');
	}
}
