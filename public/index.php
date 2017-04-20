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

    <?php require $mainView; ?>

    <?php require '../views/partials/common_js.php'; ?>

    <?php foreach ($requiredJS as $file): ?>
    	<?php require_once $file; ?>
    <?php endforeach; ?>

</body>
</html>