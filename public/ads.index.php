<?php 

require_once __DIR__ . '/../database/db_connect.php';

function getAds($dbc)
{

	$ads = [];
		$stmt = $dbc->prepare("SELECT * FROM ads");
		$stmt->execute();
		$ads['ads'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $ads;
}

extract(getAds($dbc));

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>All adds</title>
    <?php require '../views/partials/header.php'; ?>
</head>
<body>
	<div class="container">  

		<h2>All adds</h2>

		<?php foreach($ads as $ad) : ?>
			<div class="col-md-4">
				<h3><?= $ad['title'] ?></h3>
				<a href="link to ad page" target="_blank"><img height="200" src="<?= $ad['img_url'] ?>"/></a>
				<p>$<?= $ad['price'] ?></p>
			</div>
		<?php endforeach ?>
	</div>

	<?php require '../views/partials/footer.php'; ?>