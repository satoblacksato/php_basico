<?php 

namespace App\Facades;

class HtmlLogger implements ILogger
{
	public function info($message){
		echo "<p>$message</p>";
	}
}