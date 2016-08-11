<?php
 session_start();
$main_view = '';
require_once __DIR__ . '/../bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../views/partials/head.php'; ?>
</head>
<body>
    <?php require $main_view; ?>

    <?php require '../views/partials/common_js.php'; ?>
</body>
</html>
//this is the end