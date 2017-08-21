<?php

<<<<<<< HEAD
class Log
{
	private $filename;
	private $handle;

	public function __construct($prefix= "log")
	{
		if (!is_string($prefix)){
			$prefix = "log";
		}
		
		$this->filename = "{$prefix}-".date("Y-m-d").".log";
		$this->handle = fopen($this->filename, "a");

	}

	protected function logMessage($logLevel, $message)
	{
		$this->filename = date("Y-m-d");
	    $stringToWrite = date("Y-m-d H:i:s"). "[" .$logLevel. "]" . $message . PHP_EOL;
	    fwrite($this->handle, $stringToWrite);
	}

	public function info($message)
	{
		$this->logMessage("INFO", $message);	
	}

	public function error($message)
	{
		$this->logMessage("ERROR", $message);
	}
	

	public function __destruct(){
		fclose($this->handle);
	}
}
=======
require_once '../../models/User.php';

class Log
{



}
>>>>>>> c07a5f0e8411d8f011e8f9db7db579aa6835c604
