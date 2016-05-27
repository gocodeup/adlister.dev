<?php 

require_once __DIR__ . "../../../utils/Auth.php";
require_once __DIR__ . "../../../utils/Input.php";

	Auth::logout();

	header('Location: login');
	exit();

?>