<?php 

require_once __DIR__ . '/../database/db_connect.php';
require_once '../utils/Input.php';

function showAd($dbc, $id)
{
	$id = Input::get('ad');

	$ad = [];
		$stmt = $dbc->prepare("SELECT * FROM ads WHERE id = {$id}");
		$stmt->execute();
		$ad['ad'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $ad;
}

extract(showAd($dbc, $id));

?>

<!DOCTYPE html>
<html>
<head>
	<title>An ad</title>
    <?php require '../views/partials/header.php'; ?>
</head>
<body>
	<div class="container">  

		<?= $ad['title'] ?></p>
		<?= $ad['price'] ?></p>
		<?= $ad['description'] ?></p>


	</div>
	<?php require '../views/partials/footer.php'; ?>