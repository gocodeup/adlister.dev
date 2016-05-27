<?php

session_start();

require_once __DIR__ . '/../bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head>

    <title>Rad-Lister</title>
    <?php require '../views/partials/header.php'; ?>
</head>
<body>	

    <div class="container">

		<?php require $main_view; ?> 


    </div>
    
    <?php require '../views/partials/footer.php'; ?>