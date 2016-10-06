<?php 
	Class Log{
		public $filename;
		public $handle;

		public function __construct($prefix = 'log')
	    {
			$today = date("m-d-y");
	        $this->filename = "logs/$prefix-$today.log";
			$this->handle = fopen($this->filename, 'a');
	    }

		public function logMessage($logLevel, $message){
			$today = date("m-d-y");
			$now = date("h:i:s");
		    fwrite($this->handle, "$today $now [$logLevel] $message".PHP_EOL);	
		}


		public function logError($message){
			$this->logMessage("[ERROR]", $message);
		}

		public function logInfo($message){
			$this->logMessage("[INFO]", $message);
		}


    	public function __destruct()
	    {
	        // echo "{$this->filename} {$this->handle}'s time of death: " . time() . PHP_EOL;
	        fclose($this->handle);
	    }




	}



 ?>