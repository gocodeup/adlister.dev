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
        return self::has($key) ? trim($_REQUEST[$key]) : $default;
    }

    /**
     * @return array the entire input array
     */
    public static function all()
    {
        return $_REQUEST;
    }

    public static function getString($key) {
        $input = self::get($key);
        if(empty($input) || is_numeric($input) || !is_string($input)) {
            throw new Exception("Must enter valid $key");
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

    public static function escape($input) {
        return htmlspecialchars(strip_tags($input));
    }
}
