<?php 
class Log {

	public $filename;
	public $handle;
	


	public function __construct($prefix = "log-") {
		$this->filename = "../logs/" . $prefix . date('Y-m-d') . '.log';
		$this->handle = fopen($this->filename, 'a');
	}
	
	public function logMessage($logLevel, $message) {
		$formattedMessage = date('Y-m-d') . "[$logLevel] $message";
		fwrite($this->handle, $formattedMessage);
	}

	public function __destruct(){ 
		fclose($this->handle);
			
	}

	public function info($message) {
		$this->logMessage('INFO', $message);
	}

	public function error($message){
		$this->logMessage('ERROR', $message);
	}

}