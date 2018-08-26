<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model{
	use SoftDeletes;

	protected $table="tipos";
	protected $fillable=['name'];

	public function comentarios(){
		return $this->hasMany(Comentarios::class,'tipo_id');
	}
}
