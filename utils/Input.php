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

    /**
     * @return array the entire input array
     */
    public static function all()
    {
        return $_REQUEST;
    }

    public static function getNumber($key) {
        $value = self::getValue($key);
        if(!is_numeric($value)) {
            throw new Exception("Input must be a number");
        }
        return $value;
    }

    public static function getString($key) {
        $value = self::getValue($key);
        if(!is_string($value)) {
            throw new Exception("Input must be a string");
        }
        return $value;
    }

    public static function hasKey($key) {
        return isset($_REQUEST[$key]);
    }

    public static function getValue($key, $default = null) {
        if(self::hasKey($key)) {
            return $_REQUEST[$key];
        } else {
            return $default;
        }

    public static function escape($str)
    {
        return htmlspecialchars(strip_tags($str));
    }

    public static function hasTags($str)
    {
        return strip_tags($str) !== $str;
    }
}
