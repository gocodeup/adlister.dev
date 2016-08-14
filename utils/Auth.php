<?php

// require_once __DIR__ . '/Log.php';

class Auth
{

	// checks to see if user is logged in
	public static function loggedIn()
	{
		return (isset($_SESSION['IS_LOGGED_IN']) && $_SESSION['IS_LOGGED_IN'] != '');
	}
	// runs login attempt with parameters
	public static function attempt($username, $password)
	{
		// makes sure the values passed in are not empty
		if(($username == '' || $username == null) || ($password == '' || $password == null))
		{

			$_SESSION['ERROR_MESSAGE'] = 'Login information was incorrect';
			return false;
		}

		// gets instance of user model by searching with username or email($username)
		$user = User::findByUsername($username);
		// makes sure the instance returned is not empty
		if ($user == null)
		{
			$_SESSION['ERROR_MESSAGE'] = 'Login information was incorrect';
			return false;
		}

		// checks password submitted against hashed password
		if (password_verify($password, $user->password))
		{

			// sets session variables used for logged in user
			$_SESSION['IS_LOGGED_IN'] = $user->name;
			$_SESSION['LOGGED_IN_ID'] = $user->id;
			$_SESSION['TEAM_ID'] = 1;

			return true;
		}

		$_SESSION['ERROR_MESSAGE'] = 'Login information was incorrect';
		return false;
	}

	// returns id of the currently logged in user
	public static function id()
	{

		if (Auth::check())
		{

			return $_SESSION['LOGGED_IN_ID'];
		}

		return null;
	}

	// returns instance of the user model for the user that is currently logged in
	public static function user()
	{

		if (self::check())
		{

			return User::findByUsernameOrEmail($_SESSION['IS_LOGGED_IN']);
		}

		return null;
	}

	// clears session variables(logs out user)
	public static function logout()
	{

		// clear $_SESSION array
	    session_unset();

	    // delete session data on the server and send the client a new cookie
	    session_regenerate_id(true);

	    return true;
	}
}

?>