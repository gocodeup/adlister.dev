<?PHP

class Log {
    public $filename;
    public $handle;

   public function __construct($prefix = "log") {
        $this->filename = "$prefix-" . date("Y-m-d") . ".log";
        $this->handle = fopen($this->filename, 'a');
    } 

    public function logMessage($logLevel, $message) {
        $logLevel = date("Y-m-d") . " " . date("H:i:s") . " " . $logLevel;
        fwrite($this->handle, $logLevel . ": " . $message . PHP_EOL);
    }  

    public function info($message) {
        $this->logMessage("INFO", $message);
    }
    public function error($message) {
        $this->logMessage("ERROR", $message); 
    }

    public function __destruct(){
        fclose($this->handle);
    }
}

?>
