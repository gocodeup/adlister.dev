<!--Page for user account home-->
<?php
require_once '../utils/Auth.php';

if(Auth::check() !== true) {
	header("Location: http://adlister.dev/login");
	die();
}

?>
<body>
	<h1>Account Page</h1>
</body>