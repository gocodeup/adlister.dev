<!--Page for single advertisement -->
<?php
require "../views/home.php";
require "index.php";
require "../partials/navbar.php";
require "../utils/Input.php";


var_dump(get($ad));





?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?= $ad->id; ?>
</body>
</html>