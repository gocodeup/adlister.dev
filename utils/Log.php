<?php 

class Log {
    private $fileName;
    private $handle;
    private $date;

    public function __construct($prefix = 'log'){
        $this->date = date('Y-m-d');
        $this->fileName = $prefix . $this->date . 'log';
        $this->handle = fopen($this->fileName, 'a');
    }

    public function setFileName($fileName){
        $this->fileName = trim(strval($fileName));
    }

    public function setHandle($handle){
        $this->handle = trim($handle);
    }

    public function setDate($date){
        $this->date = trim($date);
    }

    public function getFileName(){
        return $this->fileName;
    }

    public function getHandle(){
        return $this->handle;
    }

    public function getDate(){
        return $this->date;
    }

    public function logMessage($logLevel, $message) {
		$dateWithTime = date("Y-m-d H:i:s");
        $output = $dateWithTime . " " . $logLevel . " " . $message;
    	fwrite($this->handle, $output);
    }

    public function info($message) {
        $this->logMessage("INFO", $message . PHP_EOL);
    }

    public function error($message) {
        $this->logMessage("ERROR", $message . PHP_EOL);
    }

    public function __destruct() {
    	fclose($this->handle);
    }

}