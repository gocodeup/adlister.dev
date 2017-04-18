<?php

require_once __DIR__ . '/Model.php';

class User extends Model {
    protected static $table = 'users';

    // override the __set method so that we can hash passwords. if the
    // given key is not a password, just call the parent method
    public function __set($name, $value)
    {
        if ($name == 'password' && $value !== "") {
            $value = password_hash($value, PASSWORD_DEFAULT);
        } else if($name == 'password' && $value === "") {
            throw new Exception("Please enter a password");
        }
        parent::__set($name, $value);
    }

    /**
     * find a user by username or email
     *
     * @param string $usernameOrEmail
     * @return User|null returns null if no matching record is found
     */
    public static function findByUsername($username)
    {
        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE username = :username';

        $connection = self::$dbc->prepare($query);
        $connection->bindValue(':username', $username, PDO::PARAM_STR);
        $connection->execute();

        $results = $connection->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($results) {
            $instance = new static;
            $instance->attributes = $results;
        }
        return $instance;
    }

    public static function findByEmail($email)
    {
        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE email = :email';

        $connection = self::$dbc->prepare($query);
        $connection->bindValue(':email', $email, PDO::PARAM_STR);
        $connection->execute();

        $results = $connection->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($results) {
            $instance = new static;
            $instance->attributes = $results;
        }
        return $instance;
    }

    public static function getNumber($key) {
        $value = self::getValue($key);
        if(!is_numeric($value)) {
            throw new Exception("Input must be a number.");
        }
        return $value;
    }

    public static function getString($key) {
        $value = self::getValue($key);
        if(!is_string($value)) {
            throw new Exception("Input must be a string.");
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
    }
}