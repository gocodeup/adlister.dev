<?php

class Log 
{
	public $fileName;
	public $handle;

	public function __construct($prefix = 'Log')
	{
		$this->logDate = date('Y-m-d');
		$this->fileName = "$prefix-{$this->logDate}.log";
		$this->handle = fopen($this->fileName, 'a');
	}

	public function __destruct()
	{
		fclose($this->handle);
	}

	public function logMessage($logLevel, $message)
	{
	 	$logTime = date('h:i:s');
	 	//$fileName = "log-{$logDate}.log";
	 	//$handle = fopen($fileName, 'a');

	 	$dateLog = [];

	 	$message = $this->logDate.' '.$logTime.' [ ' .$logLevel. ' ] '.$message;

	 	fwrite($this->handle, $message.PHP_EOL);

	 	//fclose($handle);
	}

	public function info($logMessage)
	{
		$this->logMessage("INFO", $logMessage);
	}

	public function error($logMessage)
	{
		$this->logMessage("ERROR", $logMessage);
	}

}