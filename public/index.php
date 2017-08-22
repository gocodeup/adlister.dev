<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';
require_once "../controllers/PageController.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>OooLister</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php require '../views/partials/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $mainView; ?>

    <?php require '../views/partials/common_js.php'; ?>
    
    <?php require '../views/partials/footer.php'; ?>
</body>
</html>