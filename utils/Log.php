<?php

date_default_timezone_set('America/Chicago');

class Log
{
    public static $fileName;
    public static $handle;
    public static $date;
    public static $dateTime;
    public static function openFile($prefix = 'log')
    {
        self::$dateTime = date('Y-m-d H:i:s');
        self::$date = date('Y-m-d');
        self::$fileName = "$prefix-" . self::$date . ".log";
        self::$handle = fopen(self::$fileName, 'a');
    }
    public static function logMessage($logLevel, $message)
    {
        // todo - complete this function
        self::openFile();
        fwrite(self::$handle, self::$dateTime . " [" . $logLevel . "] " . $message . PHP_EOL);
        self::closeFile();
    }
    public static function logInfo($message)
    {
        self::logMessage("INFO", $message);
    }
    public static function logError($message)
    {
        self::logMessage("ERROR", $message);
    }
    public static function closeFile()
    {
        fclose(self::$handle);
    }
}

?>