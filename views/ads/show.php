<!-- For testing go to a page like http://adlister.dev/ad.show.php?id=1 -->

<?php 

require_once __DIR__ . '/../../database/db_connect.php';
require_once '../utils/Input.php';

function showAd($dbc, $id)
{
	$id = Input::get('id');

	$ad = [];

	$stmt = $dbc->prepare("SELECT * FROM ads JOIN users ON ads.user_id = users.id WHERE ads.id = {$id}");
	$stmt->execute();
	$ad['ad'] = $stmt->fetch(PDO::FETCH_ASSOC);

	return $ad;
}

extract(showAd($dbc, Input::get('id')));

?>


		<h2><?= $ad['title'] ?></h2>
		<p>Description:<br><?= $ad['description'] ?></p> 
		<p>Date listed:<br><?= $ad['date_listed'] ?></p>
		<p>Price:<br>$<?= $ad['price'] ?></p>
		<p>Seller:<br><?= $ad['username'] ?></p>
		<p><img height="500" src="<?= $ad['img_url'] ?>"/></p>
