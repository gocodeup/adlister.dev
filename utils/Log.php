<?php
class Log
{
	protected $filename;
	private $handle;
	public $message;
	protected function logMessage($loglevel, $message)
	{
   		$this->fileName = date("Y-m-d") . ".log";
    	$this->handle = fopen($this->fileName, "a");
    	fwrite($handle, date("Y-m-d H:i:s") . "[" . $loglevel . "]" . $message . PHP_EOL);
	}
	public function info($message)
	{
		$this->logMessage('INFO', $message);
	}
	public function error($message)
	{
		$this->logMessage('ERROR', $message);
	}
}
?>