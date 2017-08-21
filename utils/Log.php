<?php

require "library.php";

class Log
{
	private $filename;
	private $handle;

	public function setFilename($filename)
    {
        $this->filename = touch(is_writeable($filename));
    }

    public function setHandle($handle)
    {
        $this->handle = trim($handle);
    }

	public function __construct($prefix = "log"){
		$this->filename = $prefix. "-" . date("Y-m-d") . ".log";
	}

	public function info($message){
		$this->logMessage("INFO",$message);
	}

	public function error($message){
		$this->logMessage("ERROR",$message);
	}

	protected function logMessage($logLevel,$message){
		$message = date("h:i:s ") . "[$logLevel]". $message . PHP_EOL;
		$this->handle = fopen($this->filename, "a");
		fwrite($this->handle,$message);
		
	} 

	public function __destruct(){
		fclose($this->handle);
	}
}