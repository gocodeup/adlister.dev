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


    // the kind of functions we will need to try and catch errors
//     public static function getString($key, $min = 0, $max = 240)
//     {

//         if(is_numeric(self::get($key))){
//             throw new Exception('should be letters'); 
//         }

//         if(!is_string(self::get($key)) || !is_numeric($max) || !is_numeric($min)){
//             throw new InvalidArgumentException('key is not a string, or min & max are not numbers');
//         }
        
//         if (!self::has($key)){
//             throw new OutOfRangeException('the requested key is missing from the input');
//         } 

//         if (gettype($key) != 'string'){
//             throw new DomainException('the requested key is missing from the input');
//         }

//         if (strlen(self::get($key)) < $min || (strlen(self::get($key))) > $max){
//             throw new LengthException('please enter between 0 and 240 characters');
//         } 

//         return self::get($key);
//     }

//     public static function getNumber($key, $min = 0, $max = 999999999999999)
//     {
//         if (!is_numeric(self::get($key))){
//             throw new Exception('should be a number');
//         }

//         if (!self::has($key)){
//             throw new OutOfRangeException('the requested key is missing from the input');
//         } 

//         if (self::get($key) < $min || self::get($key) > $max){
//             throw new RangeException('number must be greater than 0');
//         } 

//         if (!self::has($key)){
//             throw new OutOfRangeException('the requested key is missing from the input');
//         } 

//         return intval(self::get($key)); 
//     }
}
