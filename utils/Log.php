<?php
class Log
{
    public $filename;
    public $handle;
    //prefix of Log and you'll see the log data
    public function __construct($prefix="Log: ")
    {
        $currentDate = date('Y-m-d');
        $this->filename = $prefix . "log-{$currentDate}.log";
        $this->handle = fopen($this->filename, 'a');
    }
    public function __destruct()
    {
        fclose($this->handle);
    }
    //level is "awareness" message for yourself and level of importance
    public function logMessage($logLevel, $message)
    {
        //this is calling the method nameFile so you dont have to REWRITE so to speak to be "more functional"
        // $this->nameFile();
        // //setting the files name to a variable
        // $this->filename = "log-{$currentDate}.log";       
        $currentDateTime = date('Y-m-d h:i:s=T');
        fwrite($this->handle, PHP_EOL . $currentDateTime . " " . "[" . $logLevel ."]" . " " . $message);
        // fwrite($handle, $messageDisplayed . PHP_EOL);  
    }
    public function info($message)
    {
        $this->logMessage("INFO:", $message);
    }
    public function error($message)
    {
        $this->logMessage("ERROR:", $message);        
    }
    // public function nameFile()
    // {
    //     $currentDate = date('Y-m-d');
    //     //setting the files name to a variable
    //     $this->filename = "log-{$currentDate}.log";
    // }
}