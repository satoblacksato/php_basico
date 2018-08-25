<?php
namespace App\PracticaFacades;

class Message{
	protected static $messageDriver;

	public static function setDriver(IMessage $messageDriver){
		static::$messageDriver=$messageDriver;
	}

	public static function send($message){
		static::$messageDriver->send($message);
	}
}