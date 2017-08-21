<?php

class Input
{
    /**
     * @param string $key
     * @return boolean whether or not the key exists in the input
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * @return mixed the value associated with the given key,
     *               or the default value (defaults to null)
     */
    public static function get($key, $default = null)
    {
        return self::has($key) ? $_REQUEST[$key] : $default;
    }

    public static function getString($key)
  {
      $input = self::get($key);

      if(is_numeric($input) || !is_string($input)) {
          throw new Exception('Entry must be a string alpha value');
      } else if (empty($input)) {
          throw new Exception("Cannot be empty");
      }
      return $input;
  }

  public static function getDate($key)
  {
      $input = self::get($key);
      if( !is_numeric(strtotime ($input))) {
          throw new Exception("Entry must be in date format!");
      } else {
          $date = new DateTime();
          $date->setTimestamp(strtotime($input));
          $date->setTimezone(new DateTimeZone('America/Chicago'));
      }
      return $date;
  }
  public static function escape($input)
     {
         return htmlspecialchars(strip_tags($input));
     }

     public static function getNumber($key)
     {
         $input=self::get($key);
         if(!is_numeric($input)) {
             throw new Exception('Entry must be a numeric value');
         } else if (empty($input)) {
             throw new Exception("Cannot be empty");
         }
         return $input;
     }
    /**
     * @return array the entire input array
     */
    public static function all()
    {
        return $_REQUEST;
    }



}
