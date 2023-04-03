<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblUsuario
 * 
 * @property int $cod_usuario
 * @property string $nombre_usuario
 * @property string $correo_usuario
 * @property string $password_usuario
 * @property Carbon $fecha_registro
 * @property string $estado_usuario
 * @property int $cod_rol
 * 
 * @property TblRole $tbl_role
 * @property Collection|TblVenta[] $tbl_ventas
 *
 * @package App\Models
 */
class TblUsuario extends Model
{
	protected $table = 'tbl_usuarios';
	protected $primaryKey = 'cod_usuario';
	public $timestamps = false;

	protected $casts = [
		'cod_rol' => 'int'
	];

	protected $dates = [
		'fecha_registro'
	];

	protected $fillable = [
		'nombre_usuario',
		'correo_usuario',
		'password_usuario',
		'fecha_registro',
		'estado_usuario',
		'cod_rol'
	];

	public function tbl_role()
	{
		return $this->belongsTo(TblRole::class, 'cod_rol');
	}

	public function tbl_ventas()
	{
		return $this->hasMany(TblVenta::class, 'cod_usuario');
	}
}
