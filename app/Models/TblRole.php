<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblRole
 * 
 * @property int $cod_rol
 * @property string $nombre_rol
 * @property Carbon $fecha_registro
 * @property Carbon $fecha_modificacion
 * @property string $estado_rol
 * 
 * @property Collection|TblPermiso[] $tbl_permisos
 * @property Collection|TblUsuario[] $tbl_usuarios
 *
 * @package App\Models
 */
class TblRole extends Model
{
	protected $table = 'tbl_roles';
	protected $primaryKey = 'cod_rol';
	public $timestamps = false;

	protected $dates = [
		'fecha_registro',
		'fecha_modificacion'
	];

	protected $fillable = [
		'nombre_rol',
		'fecha_registro',
		'fecha_modificacion',
		'estado_rol'
	];

	public function tbl_permisos()
	{
		return $this->hasMany(TblPermiso::class, 'cod_rol');
	}

	public function tbl_usuarios()
	{
		return $this->hasMany(TblUsuario::class, 'cod_rol');
	}
}
