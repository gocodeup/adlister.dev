<?php

require_once __DIR__ . '/../utils/Auth.php';
require_once __DIR__ . '/../utils/Input.php';


$errorMessage = '';


if ($_POST) {
	$errorMessage = pageController();
}

function pageController() {

	$username = Input::get('username');
    $password = Input::get('password');
    $errorMessage = "Login failed, please try again";

	if(Auth::attempt($username, $password) == TRUE) {
		header('Location: authorized.php');
	} else {
		return $errorMessage;
	}

}


if (isset($_SESSION['logged_in_user'])) {
	header('Location: authorized.php');
	exit;
}


?>
