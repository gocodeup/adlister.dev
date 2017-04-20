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
	   <?php foreach($names as $name) { ?>
        <?php echo $name ?>
            <?php }; ?>
	  </div>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Username</h3>
	  </div>
	  <div class="panel-body">
	  <?php foreach($usernames as $username) { ?>
		<?php echo $fav ?>
            <?php }; ?>
	  </div>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Email</h3>
	  </div>
	  <div class="panel-body">
	  <?php foreach($emails as $email) { ?>
        <?php echo $email ?>
            <?php }; ?>
	  </div>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Active Ads</h3>
	  </div>
	  <div class="panel-body">
		<?php foreach($ads as $ad) { ?>
           <?php echo $ad ?>
            <?php }; ?>
	  </div>
	</div>
</body>
</html>