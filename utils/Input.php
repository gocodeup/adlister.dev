<?php

class Input
{

    /**
     * @param $key as a string
     * @return boolean
     */
    public static function has($key)
    {
        if(isset($_REQUEST[$key])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return value at $_SESSION[$key] if set, else return null
     */
    public static function get($key, $default = null)
    {
        if(isset($_REQUEST[$key])) {
            return $_REQUEST[$key];
        } else {
            return $default;
        }
    }

    // returns entire array from request super global
    public static function all()
    {
        return $_REQUEST;
    }
    public static function getString($key, $min = 0, $max = 255)
    {
        $potentialString = self::get($key);

        if (is_numeric ($potentialString) || !is_string($potentialString)) {
            throw new InvalidArgumentException(" Invalid Argument, $key must be corrected! ");
        }
        if (empty($potentialString)) {
            throw new OutOfRangeException("Out of range, $key was left empty!");
        }
        if ($potentialString < $min || $potentialString > $max) {
            throw new RangeException("The Range of $key bust be between $min - $max characters!");
        }
        if ($potentialString > $max || $potentialString < $min) {
            throw new LengthException("The Length of $key bust be between $min - $max characters!");
        }

        return $potentialString;
    }

    public static function getNumber($key, $min = 1, $max = 255)
    {
        $potentialInt = self::get($key,0);

        if (!is_numeric($potentialInt))  {
            throw new InvalidArgumentException(" $key must be corrected! ");
        }
        if (empty($potentialInt)) {
            throw new OutOfRangeException("$key was left empty!");
        }
        if ($potentialInt < $min || $potentialInt > $max) {
            throw new RangeException("The value of $key bust be between $min - $max characters!");
        }
        if ($potentialInt > $max || $potentialInt < $min) {
            throw new LengthException("The value of $key bust be between $min - $max characters!");
        }

        $potentialInt = (int)$potentialInt;

        return $potentialInt;
    }

}
