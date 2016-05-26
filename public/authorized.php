<?php

require_once '../utils/Auth.php';
require_once '../utils/Input.php';

function pageController() {

	Auth::check();
}

if ($_POST) {
	pageController();
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Authorized</title>
</head>
<body>
	<h1>Authorized</h1>
	<a href="index.php">Back</a>
	<a href="auth.logout.php">Logout</a>
</body>
</html>