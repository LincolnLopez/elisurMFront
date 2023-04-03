<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblEncuestum
 * 
 * @property int $cod_pregunta
 * @property string $p1
 * @property string $p2
 * @property string $p3
 * @property string $p4
 * @property string $p5
 * @property string $p6
 * @property string $p7
 * 
 * @property Collection|TblRespuesta[] $tbl_respuestas
 *
 * @package App\Models
 */
class TblEncuestum extends Model
{
	protected $table = 'tbl_encuesta';
	protected $primaryKey = 'cod_pregunta';
	public $timestamps = false;

	protected $fillable = [
		'p1',
		'p2',
		'p3',
		'p4',
		'p5',
		'p6',
		'p7'
	];

	public function tbl_respuestas()
	{
		return $this->hasMany(TblRespuesta::class, 'cod_pregunta');
	}
}
