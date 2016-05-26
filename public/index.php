<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
require_once __DIR__ . '/../bootstrap.php';
​
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sell Your Crap</title>
​
    <?php require '../views/partials/head.php'; ?>
​
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>
​
    <?php require $main_view; ?>
​
    <?php require '../views/partials/footer.php'; ?>
​
    <?php require '../views/partials/common_js.php'; ?>
​
</body>
</html>