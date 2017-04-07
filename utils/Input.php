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
}
