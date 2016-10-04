<?php
session_start();

// require_once __DIR__ . '/../bootstrap.php';

require_once (__DIR__ . '/../controllers/PageController.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>gaglister</title>
    <?php require __DIR__.'/../views/partials/head.php'; ?>
</head>
<body>
	<!-- <?php require __DIR__.'/../views/partials/navbar.php'; ?> -->

	<?php require $main_view; ?>

    <?php require __DIR__.'/../views/partials/common_js.php'; ?>
</body>
</html>