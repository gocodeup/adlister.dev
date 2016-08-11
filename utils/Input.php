<?php
class Input
{
    /**
     * @param $key as a string
     * @return boolean
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]) ? true : false;
    }
    /**
     * @return value at $_SESSION[$key] if set, else return null
     */
    public static function get($key, $default = null)
    {
        return self::has($key) ? $_REQUEST[$key] : $default;
    }
    // returns entire array from request super global
    public static function all()
    {
        return $_REQUEST;
    }
}
