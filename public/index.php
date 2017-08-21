<?php
if(!isset($_SESSION)){
	session_start();
}

require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventor Center!</title>
   	<?php require '../views/partials/head.php'; ?>
   	
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $mainView; ?>

    <?php require '../views/partials/footer.php'; ?> 

    <?php require '../views/partials/common_js.php'; ?> 
</body>
</html>