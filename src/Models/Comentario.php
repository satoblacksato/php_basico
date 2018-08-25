<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model{
	use SoftDeletes;

	protected $table="comentarios";
	protected $fillable=['name','description','tipo_id'];

	//const CREATED_AT = 'fecha_crea';
}
