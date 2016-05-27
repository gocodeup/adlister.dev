<?php

require_once __DIR__ . '/Model.php';

class User extends Model {

    protected static $table = 'users';

    // checks if the attribute being saved is password and hashes it if so
    public function __set($name, $value)
    {

    	if ($name == 'password')
    	{
    		$value = password_hash($value, PASSWORD_DEFAULT);
    	}

        parent::__set($name, $value);
    }

    // finds and returns instance of user based on email or username
    public static function findByUsernameOrEmail($username_or_email)
    {

    	self::dbConnect();

    	$query = 'SELECT * FROM ' . self::$table . ' WHERE username = :username OR email = :email';

    	$stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':username', $username_or_email, PDO::PARAM_STR);
        $stmt->bindValue(':email', $username_or_email, PDO::PARAM_STR);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }
     public static function getString($key, $min, $max)
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

    public static function getNumber($key, $min, $max)
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

?>