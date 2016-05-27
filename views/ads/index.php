<?php

require_once __DIR__ . '/../../models/Ad.php';

$ads = Ad::all();

function getAds() {
	$data['ads'] = Ad::all()->attributes;
	return $data;
}

extract(getAds());

 ?>


		<h2>All adds</h2>

		<?php foreach($ads as $ad) : ?>
			<div class="col-md-4">
				<h3><?= $ad['title'] ?></h3>
				<a href="/ad.show.php?id=<?= $ad['id'] ?>" target="_blank"><img height="200" src="<?= $ad['img_url'] ?>"/></a>
				<p>$<?= $ad['price'] ?></p>
			</div>
		<?php endforeach ?>