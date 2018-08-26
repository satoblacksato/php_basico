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

function getView($view){
	return "../views/$view.php";
}