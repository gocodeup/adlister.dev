<?php
if(!isset($_SESSION)){
	session_start();
}
var_dump($_SESSION);
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>OooLister</title>
 <!--    <?php require '../views/partials/head.php'; ?>
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $mainView; ?>

    <?php require '../views/partials/common_js.php'; ?> -->
</body>
</html>