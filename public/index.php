<?php
// session_start();
// require_once __DIR__ . '/../bootstrap.php';

// extract(get3Ads($dbc));

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap CSS cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- external css -->
	<link rel="stylesheet" href="/css/main.css">
    <title>Rad-Lister</title>
    <?php require '../views/partials/navbar.php'; ?>
    <?php require '../views/partials/header.php'; ?>
</head>
<body>
<div class="container">
	<!-- <?php //require $main_view; ?> 

	<?php //require '../views/partials/common_js.php'; ?>-->

	<?php require '../views/partials/display_3_ads.php';?>

    <?php require '../views/partials/footer.php'; ?>
</div>

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>