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

        // @TODO: Store the resultset in a variable named $result
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

    // relationship to items owned by user
    public function items()
    {

        return Item::findAllWithUserId($this->id);
    }

}

?>