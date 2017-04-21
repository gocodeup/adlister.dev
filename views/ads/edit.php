<!--Page that includes the form to edit an existing ad-->
<?php
require_once '../utils/Auth.php';

if(Auth::check() !== true) {
	header("Location: http://adlister.dev/login");
	die();
}
?>