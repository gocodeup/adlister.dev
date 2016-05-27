<?php

require_once '../utils/Auth.php';
require_once '../utils/Input.php';

// clear session data in memory & on disk and send user a new session cookie
function clearSession()
{
	Auth::logout();
}

// start the session (or resume an existing one)
// this function must be called before trying to get or set any session data!
session_start();

clearSession();

header('Location: /');


// ...

?>