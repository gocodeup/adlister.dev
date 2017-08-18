<?php
class Log
{
	public $filename;
	public $handle;

	function __construct($prefix = 'log')
	{
		$this->filename = $prefix . date("Y-m-d") . ".log";
		$this->handle = fopen($this->filename, 'a');
	}

	function logInfo($message){
	    $this->logMessage("INFO", $message);
	}

	function logError($message){
	    $this->logMessage("ERROR", $message);
	}
	public function logMessage($logLevel, $message)
	{
	    // $this->filename = "log-" . date("Y-m-d") . ".log";

	    $log = date('Y-m-d G:i:s') . " [$logLevel] $message". PHP_EOL;

	    // $handle = fopen($this->filename, 'a');

	    fwrite($this->handle, $log);
	    // fclose($handle);
	}

	function __destruct()
	{
		fclose($this->handle);
	}

}
?>
