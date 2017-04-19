<!--Page for user account home-->
<?php
require_once '../utils/Auth.php';

if(Auth::check() !== true) {
	header("Location: http://adlister.dev/login");
	die();
}

?>