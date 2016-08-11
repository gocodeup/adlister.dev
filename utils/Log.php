<?php

class Log
{	//defining variables
	private $filename;
	private $handle;
	private $date; 
	private $time; 


	//constructor function performs from the start
	//constructor function defines variables and opens the file
	public function __construct($prefix='log') {
		$this->date = date('Y-m-d');
		$this->time = date('h-i-s'); 
		$this->filename = "{$prefix}-{$this->date}.log";
		$this->handle = fopen($this->filename, 'a');
	}

	private function setFilename($filename){
		$this->filename = (string)$filename;
	}

	private function setHandle($handle){
		$this->handle = (string)$handle;
	}

	//logMessage writes in the file
	function logMessage($logLevel, $message) {
		if (touch($this->filename) && is_writable($this->filename)) {
			fwrite($this->handle, $this->date . ' ' . $this->time . ' ' . $logLevel . ' ' . $message . PHP_EOL);
		} else {
			echo "Not readable or writeable";
		}
	} 

	function logInfo($message) {	
		$this->logMessage ('INFO', $message);
	}

	function logError($message) {
		$this->logMessage('ERROR', $message);
	}

	//destruct function runs at the very end, closing the file
	public function __destruct(){
		fclose($this->handle);
	}
}

