<?php

class Log
{

	private $filename;
	private $handle;
	private $date;

	// opens connection / creates log file for the day
	public function __construct($prefix = 'log')
	{

		$this->date = date('Y-m-d');

		$filename = $prefix . '-' . $this->date . '.log';
		$this->setFilename( $filename );

		$this->handle = fopen($this->filename, 'a');
	}

	// sets the private filename property to the value passed to function
	private function setFilename($filename)
	{

		// makes sure filename is a string
		if (! is_string($filename))
		{

			echo 'The property $filename needs to be a string. You gave ' . gettype($filename) . PHP_EOL;
			die();
		}
		else if (touch($filename) && is_writable($filename))	// touches file / checks if it is writeable
		{

			$this->filename = $filename;
		}
		else
		{

			echo 'You do not have the access rights for that file' . PHP_EOL;
		}
	}

	// writes message to log file
	protected function logMessage($logLevel, $message)
	{

		$time = date('H:i:s');
	    $formatedMessage = "{$this->date} {$time} [{$logLevel}] {$message}";
	    fwrite($handle, $formatedMessage);
	}

	// sets log level to info and sends message that was passed to it
	public function logInfo($message)
	{
		$this->logMessage("INFO", $message);
	}

	// sets log level to error and sends message that was passed to it
	public function logError($message)
	{
		$this->logMessage("ERROR", $message);
	}

	// closes connection to file
	public function __destruct()
	{

		fclose($this->handle);
	}
}