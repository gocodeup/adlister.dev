<?php

require_once __DIR__ . '/Model.php';

class User extends Model {
    protected static $table = 'users';
    protected static $minUser = 5;
    protected static $minPass = 6;

    // override the __set method so that we can hash passwords. if the
    // given key is not a password, just call the parent method
    public function __set($name, $value)
    {
        if ($name == 'password') {
            $value = password_hash($value, PASSWORD_DEFAULT);
        }
        parent::__set($name, $value);
    }

    public static function getMinimum($str)
    {
        if ($str === 'username') {
            return static::$minUser;
        } elseif ($str === 'password') {
            return static::$minPass;
        }
        
    }

    /**
     * find a user by username or email
     *
     * @param string $usernameOrEmail
     * @return User|null returns null if no matching record is found
     */
    public static function findByUsernameOrEmail($usernameOrEmail)
    {
        self::dbConnect();

        $query = "SELECT * FROM " . self::$table . " WHERE username = :username OR email = :email";

        $statement = self::$dbc->prepare($query);
        $statement->bindValue(':username', $usernameOrEmail, PDO::PARAM_STR);
        $statement->bindValue(':email', $usernameOrEmail, PDO::PARAM_STR);
        $statement->execute();

        $results = $statement->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($results) {
            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }

    public function save()
    {
        if ($this->validate()) {
            parent::save();
            return true;
        }
        return false;
    }

    protected function validate()
    {
        $_SESSION['ERROR_MESSAGES'] = [];
        foreach ($this->attributes as $name => $attribute) {
            if (!$attribute) {
                $_SESSION['ERROR_MESSAGES'][$name] = "$name cannot be blank";
            }
        }

        foreach ($this->attributes as $name => $attribute) {
            if (!isset($_SESSION['ERROR_MESSAGES'][$name])) {
                continue;
            }
            if (Input::hasTags($attribute)) {
                $_SESSION['ERROR_MESSAGES'][$name] = "$name was invalid";
            }
        }

        if (!isset($_SESSION['ERROR_MESSAGES']['username']) and strlen($this->attributes['username']) < static::$minUser) {
            $_SESSION['ERROR_MESSAGES']['username'] = "username must be at least $minUser characters";
        }

        if (!isset($_SESSION['ERROR_MESSAGES']['username']) and is_numeric($this->attributes['username'])) {
            $_SESSION['ERROR_MESSAGES']['username'] = 'username cannot consist entirely of numbers';
        }
        // return $instance;
    
        if (!isset($_SESSION['ERROR_MESSAGES']['username']) and static::findByUsernameOrEmail($this->attributes['username'])) {
            $_SESSION['ERROR_MESSAGES']['username'] = 'username already exists';
        }

        if (!isset($_SESSION['ERROR_MESSAGES']['password']) and strlen($this->attributes['password']) < static::$minPass) {
            $_SESSION['ERROR_MESSAGES']['password'] = "password must be at least $minPass characters";
        }

        if (!isset($_SESSION['ERROR_MESSAGES']['password']) and $this->attributes['password'] !== Input::get('password-confirm')) {
            $_SESSION['ERROR_MESSAGES']['password-confirm'] = 'password did not match confirmation';
        }

        if (!isset($_SESSION['ERROR_MESSAGES']['email']) and !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['ERROR_MESSAGES']['email'] = 'email must be in valid format';
        }

        return empty($_SESSION['ERROR_MESSAGES']);
    }
}