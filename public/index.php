<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>SnapList</title>
    <?php require '../views/partials/head.php'; ?>
    <link rel="shortcut icon" href="/img/uploads/sl.ico" type="image/x-icon">
    <link rel="icon" href="/img/uploads/sl.ico" type="image/x-icon">
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $mainView; ?>

	<?php require '../views/partials/footer.php'; ?>
	
    <?php require '../views/partials/common_js.php'; ?>
</body>
</html>