<?php 

class Log {
	private $filename;
	private $handle;
	private $date;



	public function __construct($prefix = 'log') 
	{
		$this->setDate();
		$this->setFilename($prefix);
		$this->setHandle();
	}

	private function setFilename($prefix) {
		$this->filename = "{$prefix}-{$this->date}.log";
		
		if(!touch($this->filename)) {
			echo 'File is not writable' . PHP_EOL;
			exit;
		}

		if(!is_writable($this->filename)) {
			echo 'File is not writable' . PHP_EOL;
			exit;
		}
	}

	private function setHandle() {
		$this->handle = fopen($this->filename, "a");
	}

	private function setDate() {
		$this->date = date("Y-m-d");
	}

	public function logMessage($logLevel, $message)
	{
		$output = date("Y-m-d H:i:s"). " " . $logLevel . " " . $message .  PHP_EOL;
	    fwrite($this->handle, $output);
	}

	public function logInfo($message){
    	$this->logMessage("INFO", $message) . PHP_EOL;
	}

	public function logError($message){
	    $this->logMessage("ERROR", $message) . PHP_EOL;
	}

	public function __destruct() 
	{
		fclose($this->handle);
	}
}


 ?>