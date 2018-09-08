<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 04/07/2017
 * Time: 15:43
 */
require '../vendor/autoload.php';

require '../config/database.php';
require '../helpers/helper.php';

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

for($idx=0;$idx<5000;$idx++){
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

//Comentario::where('tipo_id','=',2)->delete();
//

/*
echo date('Y-m-d H:i:s.u');
foreach (Comentario::get()
	as $item) {
	echo "<p>{$item->name} es de tipo {$item->tipo->name}</p>";
}
echo date('Y-m-d H:i:s.u');

echo date('Y-m-d H:i:s.u');
foreach (Comentario::with('tipo')->get()
	as $item) {
	echo "<p>{$item->name} es de tipo {$item->tipo->name}</p>";
}
echo date('Y-m-d H:i:s.u');
*/

/*
echo date('Y-m-d H:i:s.u');
foreach (Comentario::
	join('tipos as t','t.id','=','comentarios.tipo_id')
	->get()
	as $item) {
	echo "<p>{$item->name} es de tipo {$item->tipo->name}</p>";
}
echo date('Y-m-d H:i:s.u');*/




$controller= evaluaController('controller', $_REQUEST);
$method= getMethod('method', $_REQUEST);

try {
    $objController = new $controller;
    $objController->$method();
}catch (\Exception $ex){
    echo "errrrror";
}