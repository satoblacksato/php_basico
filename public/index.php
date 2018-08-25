<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 04/07/2017
 * Time: 15:43
 */
require '../vendor/autoload.php';

require '../config/database.php';

use App\Models\Comentario;
/*
$objComentario=new App\Models\Comentario;

//var_dump($objComentario->all()); //select * from sin where

$objComentario->fill(['name'=>'comentario2',
'description'=>'esta es la descripcion',
'tipo_id'=>4
]);
$objComentario->save();*/
//$objComentario->name='dddd'; a lo tradicional
//


/*
$objFaker=Faker\Factory::create('es_ES');
$arrayData=[];

for($idx=0;$idx<rand(3,20);$idx++){
	(
		new App\Models\Comentario(
			['name'=>$objFaker->firstName,
			 'description'=>$objFaker->text,
			'tipo_id'=>rand(1,4)
			]
		)
	)->save();
}
*/


/*
$objComentario=App\Models\Comentario::findOrFail(1);
$objComentario->name='esto se actualiza';
$objComentario->save();
var_dump($objComentario);*/


/*
$objComentario=App\Models\Comentario::findOrFail(1);
$objComentario->delete();*/


/*
$var= Comentario::where('tipo_id','=',4)
->orderBy('name','ASC')->get();
var_dump($var);*/

/*
$var= Comentario::where('tipo_id','=',4)
->orderBy('name','ASC')->get(['id','name']);
var_dump($var);

$var= Comentario::where('tipo_id','=',4)
->orderBy('name','ASC')->select('id','name')->get();
var_dump($var);*/

/*
$var= Comentario::where('tipo_id','=',4)
->orderBy('name','ASC')->pluck('name','id')->toArray();
var_dump($var);*/

/*
Comentario::where('tipo_id','=',2)
->update(['name'=>'actualizado']);*/

Comentario::where('tipo_id','=',2)->delete();