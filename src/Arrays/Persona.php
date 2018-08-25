<?php
namespace App\Arrays;

use Faker\Factory;

class Persona
{
	private $nombre;
	private $apellido; 
	private $faker;

	function __get($name){
        return $this->$name;
    }

    function __set($name, $value){
       $this->$name=$value;
    }

    public function fullName(){
    	return $this->nombre.' '.$this->apellido;
    }



    public function __construct( $faker){
        $this->faker=$faker;
    }
    public function generate(){
    	$this->nombre=$this->faker->firstName;
    	$this->apellido=$this->faker->lastName;
    	$this->edad=rand(10,60);
    	return $this;
    }
}