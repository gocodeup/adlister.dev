<?php
    session_start();
    require_once __DIR__ . '/../bootstrap.php';
    $loggedIn = isset($_SESSION['LOGGED_IN_ID']);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <?php require '../views/partials/head.php'; ?>
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $mainView; ?>

    <?php require_once '../public/js/js_files.php'; ?>

    <?php //foreach ($requiredJS as $file): ?>
    	<?php //require_once $file; ?>
    <?php //endforeach; ?>

</body>
</html>