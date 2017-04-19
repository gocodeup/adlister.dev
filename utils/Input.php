<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    public static function getString($key) {
      $input = self::get($key);
      if(!is_string($input) || is_numeric($input)) {
        throw new Exception("Input for $key must be a string.");
      }
      return $input;
    }

    public static function getNumber($key) {
      $input = self::get($key);
      if(!is_numeric($input)) {
        throw new Exception("Input for $key must be a number.");
      }
      return $input;
    }

	public static function getFloat($key) {
	  $input = self::get($key);
	  if(!is_numeric($input)) {
		throw new Exception("Input for $key must be a number.");
	  }
	  return $input;
	}

    public static function getDate($key) {
      $input = self::get($key);

      $date = DateTime::createFromFormat('Y/m/d', $input);
      if(!$date) {
        throw new Exception("$key must be in the YYYY-MM-DD format");
      }
      return $date->format('Y-m-d');
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (self::has($key)) {
          return trim($_REQUEST[$key]);
        } else {
          return $default;
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
