<?php
namespace App\Facades;

class Log{
	protected static $loggerDriver;

	public static function setLogger(ILogger $loggerDriver){
		static::$loggerDriver=$loggerDriver;
	}

	public static function info($message){
		static::$loggerDriver->info($message);
	}
}