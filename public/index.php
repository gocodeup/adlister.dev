<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="/img/adlister.png">
    <title>Ad Lister</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $main_view; ?>

    <?php require '../views/partials/common_js.php'; ?>
</body>
</html>