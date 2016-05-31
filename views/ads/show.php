<!-- For testing go to a page like http://adlister.dev/ad.show.php?id=1 -->

<?php 
require_once __DIR__ . '/../../utils/Auth.php';
require_once __DIR__ . '/../../models/Model.php';
require_once __DIR__ . '/../../models/Ad.php';
require_once '../utils/Input.php';



$ad = Ad::showAd(Input::get('id'));

?>


		<h2><?= $ad['title'] ?></h2>
		<p>Description:<br><?= $ad['description'] ?></p> 
		<p>Date listed:<br><?= $ad['date_listed'] ?></p>
		<p>Price:<br>$<?= $ad['price'] ?></p>
		<p>Seller:<br><?= $ad['username'] ?></p>
		<p><img height="500" src="<?= $ad['img_url'] ?>"/></p>
