<?php

if(!isset($_SESSION)) {
    session_start();
}


require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>OooLister</title>
    <?php include_once __DIR__ . '/../views/partials/head.php'; ?>
</head>
<body>
    <?php include_once __DIR__ . '/../views/partials/navbar.php'; ?>

    <?php include_once $mainView; ?>

    <?php include_once __DIR__  .'/../views/partials/common_js.php'; ?>
</body>
</html>
