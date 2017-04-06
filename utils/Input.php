<?php

class Input
{
    /**
     * @param $key as a string
     * @return boolean
     */
    public static function has($key)
    {
        // TODO refactor this
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
        // TODO refactor to use the the has method and a ternary
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
}
