<?php

function evaluaController($key,$array,$code=400){
	$prefix='App\\Controllers\\';
	if(array_key_exists($key,$array)){
		return $prefix.$array[$key];
	}else{
		return $prefix.'HomeController';
	}

	//throw new \Exception('CONTROLADOR NO EXISTE', $code);
}

function getMethod($key, $array){
	if(array_key_exists($key,$array)){
		return $array[$key];
	}else{
		return 'index';
	}
}


function getVar($key, $array){
	if(array_key_exists($key,$array)){
		return $array[$key];
	}else{
		return NULL;
	}
}

function getView($view){
	return "../views/$view.php";
}

function getCombo($array){
	$result='<option>SELECCION</option>';
	foreach ($array as $key=> $name) {
		$result.="<option value='{$key}'>{$name}</option>";
	}
	return $result;
}

function setFillCustom($array,$tipoMethod){
	$arrayFill=[];
	foreach ($array as $value) {
		$arrayFill[$value]=getVar($value,$tipoMethod);
	}
	return $arrayFill;
}