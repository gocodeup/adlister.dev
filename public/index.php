<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>OooLister</title>
    <?php require '../views/partials/head.php'; ?>
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>
    <div class="container-fluid col-sm-12 full-height no-padding">
    	<div class="container col-sm-2 no-padding full-height sidebar">
    		<?php require '../views/partials/sidebar.php'; ?>
    	</div>
    	<div class="container col-sm-9">
		    <?php require $main_view; ?>
		</div>
    <?php require '../views/partials/scripts.php'; ?>
</body>
</html>