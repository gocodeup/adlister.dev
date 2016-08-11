<?php

class Log
{
    public function __construct($prefix = 'log')
    {
        $this->date = date("Y-m-d");
        $this->filename = $prefix . "-" . $this->date .".log";
        $this->handle = fopen($this->filename, 'a');
    }
    public function __destruct()
    {
      fclose($this->handle);
    }

    public $filename;
    public function logMessage($logLevel, $message) {
        $time = date("H:i:s");
        $formattedMessage = "$this->date $time [$logLevel] $message\n";
        fwrite($this->handle, $formattedMessage);
    }
    public function info($logMessage) {
        $this->logMessage("INFO", $logMessage);
    }
    public function error($logMessage) {
        $this->logMessage("ERROR", $logMessage);
    }
}