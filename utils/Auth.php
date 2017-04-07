<?php

require_once 'Log.php';
require_once '../models/User.php';

class Auth
{
    /**
     * attempt to log in a user
     *
     * if the username and password combination are valid, set the
     * appropriate keys in the session
     *
     * @param string $username
     * @param string $password
     * @return boolean whether or not the attempt was successful
     */
    public static function attempt($username, $password)
    {
        // makes sure the values passed in are not empty
        if(($username == '' || $username == null) || ($password == '' || $password == null)) {
            $_SESSION['ERROR_MESSAGE'] = 'Login information was incorrect';
            return false;
        }

        // gets instance of user model by searching with username or email($username)
        $user = User::findByUsernameOrEmail($username);

        // makes sure the instance returned is not empty
        if ($user == null) {
            $_SESSION['ERROR_MESSAGE'] = 'Login information was incorrect';
            return false;
        }

        // checks password submitted against hashed password
        if (password_verify($password, $user->password)) {
            // sets session variables used for logged in user
            $_SESSION['IS_LOGGED_IN'] = $user->username;
            $_SESSION['LOGGED_IN_ID'] = $user->id;

            return true;
        }

        $_SESSION['ERROR_MESSAGE'] = 'Login information was incorrect';
        return false;
    }

    /**
     * check if a user is logged in
     *
     * @return boolean whether or not a user is logged in
     */
    public static function check()
    {
        return (isset($_SESSION['IS_LOGGED_IN']) && $_SESSION['IS_LOGGED_IN'] != '');
    }

    /**
     * get the id of the logged in user
     *
     * @return int
     */
    public static function id()
    {
        if (Auth::check()) {
            return $_SESSION['LOGGED_IN_ID'];
        }
        return null;
    }

    /**
     * get the logged in user object
     *
     * @return User
     */
    public static function user()
    {
        if (self::check()) {
            return User::findByUsernameOrEmail($_SESSION['IS_LOGGED_IN']);
        }
        return null;
    }

    /**
     * clear out and regenerate the session
     *
     * @return boolean true
     */
    public static function logout()
    {
        // clear $_SESSION array
        session_unset();
        // delete session data on the server and send the client a new cookie
        session_regenerate_id(true);
        return true;
    }
}