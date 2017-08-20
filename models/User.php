<?php

require_once __DIR__ . '/Model.php';

class User extends Model {
    protected static $table = 'users';

    // override the __set method so that we can hash passwords. if the
    // given key is not a password, just call the parent method
    public function __set($name, $value)
    {
        if ($name == 'password') {
            $value = password_hash($value, PASSWORD_DEFAULT);
        }
        parent::__set($name, $value);
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

        $query = 'SELECT * FROM ' . self::$table . ' WHERE username = :username OR email = :email';

        $stmt = self::$connection->prepare($query);
        $stmt->bindValue(':username', $usernameOrEmail, PDO::PARAM_STR);
        $stmt->bindValue(':email', $usernameOrEmail, PDO::PARAM_STR);
        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($results) {
            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }
    public static function findPassword($password)
    {
        self::dbConnect();
        $query = 'SELECT * FROM ' . self::$table . ' WHERE password = :password';
        $stmt = self::$connection->prepare($query);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        $instance = null;
        if ($results) {
            $instance = new static;
            $instance->attributes = $results;
        }
        return $instance;
    }

    public static function createUser()
    {
        $stmt = self::$connection->prepare('INSERT INTO users (name, email, username, password) VALUES (:name, :email, :username, :password)');
        $stmt->bindValue(':name', Input::sanitize($_POST['name']), PDO::PARAM_STR);
        $stmt->bindValue(':email', Input::sanitize($_POST['signupEmail']), PDO::PARAM_STR);
        $stmt->bindValue(':username', Input::sanitize($_POST['username']), PDO::PARAM_STR);
        $stmt->bindValue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
        $stmt->execute();

    }

}
