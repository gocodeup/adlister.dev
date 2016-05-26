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
	<!-- Bootstrap CSS cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- external css -->
	<link rel="stylesheet" href="/css/shakespearean_insult_generator.css">
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
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>