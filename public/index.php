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


	<!-- change back to "$main_view" when project is done -->
	<?php require $main_view; ?>


	<?php require '../views/partials/common_js.php'; ?>
</body>
</html>