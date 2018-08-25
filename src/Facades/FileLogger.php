<?php 

namespace App\Facades;

class FileLogger implements ILogger
{
	public function info($message){
		file_put_contents(
			__DIR__.'/../../storage/log.txt', 
			'('.date('Y-m-d H:i:s').')'.$message."\n",
			FILE_APPEND
		);
	}
}