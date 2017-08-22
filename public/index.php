<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>AdLister</title>
    <?php require '../views/partials/head.php'; ?>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

   	<?php require $main_view; ?> 

    <?php require '../views/partials/common_js.php'; ?>

    <!-- <?php require '/footer.php'; ?> -->

    <script src="/css/navbar.js"></script>
</body>
</html>