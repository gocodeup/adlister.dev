<!--Page for user account home-->
<?php

require_once __DIR__ . '/../../utils/Auth.php';
require_once __DIR__ . '/../../models/User.php';

if(Auth::check() !== true) {
	header("Location: http://adlister.dev/login");
	die();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
</head>
<body>
	<div class="panel panel-default">
	  <div class="panel-heading">Name</div>
	  <div class="panel-body">
        <?php echo $user->name ?>
	  </div>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Username</h3>
	  </div>
	  <div class="panel-body">
		<?php echo $user->username ?>
	  </div>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Email</h3>
	  </div>
	  <div class="panel-body">
        <?php echo $user->email ?>
	  </div>
	</div>
</body>
</html>