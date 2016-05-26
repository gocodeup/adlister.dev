<?php

session_start();

// require_once __DIR__ . '/../bootstrap.php';

// extract(get3Ads($dbc));

?>
<!DOCTYPE html>
<html>
<head>

    <title>Rad-Lister</title>
    <?php require '../views/partials/header.php'; ?>
</head>
<body>	
	<?php require_once 'auth.login.php'; ?>

    <div class="container">
	<!-- <?php //require $main_view; ?> 

	<?php //require '../views/partials/common_js.php'; ?>-->

	   <?php require '../views/partials/display_3_ads.php';?>


    </div>
    
    <?php require '../views/partials/footer.php'; ?>
    