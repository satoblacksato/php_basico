<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 04/07/2017
 * Time: 15:43
 */
require '../vendor/autoload.php';
//$loader->add('App\\',__DIR__.'/scr/');    // '/scr' ruta

/*$objFirstCode= new \App\Fechas\Manejador();
echo $objFirstCode->getDate();
echo $objFirstCode->getdateDiff(7);
echo $objFirstCode->getdateDiffHumans(2);echo "<br>";*/

use \App\PracticaFacades\Message;
use \App\Facades\Log;
use \App\PracticaFacades\{MessageGmail,MessageInstitucion};



Log::setLogger(new \App\Facades\FileLogger());

Message::setDriver(
	new MessageInstitucion(
		[ 'name'=>'example@gmail.com',
		  'password'=>'123456'	
		]
	)
);

$objFaker=Faker\Factory::create('es_ES');
$arrayData=[];
for($idx=0;$idx<rand(1,50);$idx++){
	$arrayData[]=(new \App\Arrays\Persona($objFaker))->generate();
}
foreach ($arrayData as $key=> $item) {
	$data=  $item->fullName(). " ES ".(($item->edad>=18)?"MAYOR":"MENOR")." DE EDAD";
	Log::info($data);
}


$filterArray=array_filter($arrayData,function($item){
	return $item->edad<18;
});

foreach ($filterArray as $key=> $item) {
	$data=  $item->fullName();
	Message::send($data);
}

