<?php 

namespace App\PracticaFacades;
use App\Facades\Log;
class MessageInstitucion implements IMessage
{
	protected $config;
	public function __construct(array $config){
		$this->config=$config;
	}

	public function send($message){
		if(array_key_exists('name', $this->config)&&
			array_key_exists('password', $this->config)){
			Log::info($message.' desde la empresa');
		return true;
		}
		throw new \Exception("el array de configuracion no esta especificado");
	}
}