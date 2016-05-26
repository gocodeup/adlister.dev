<?php 

require_once __DIR__ . '/../../database/db_connect.php';

function get3Ads($dbc)
{
	$adLimit = 3;

	$ads = [];
		$stmt = $dbc->prepare("SELECT * FROM ads LIMIT {$adLimit}");
		$stmt->execute();
		$ads['ads'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $ads;
}

extract(get3Ads($dbc));

?>
<h2>Recent adds</h2>

	<?php foreach($ads as $ad) : ?>
		<div class="col-md-4">
			<h3><?= $ad['title'] ?></h3>
			<a href="/ad.show.php?id=<?= $ad['id'] ?>" target="_blank"><img height="200" src="<?= $ad['img_url'] ?>"/></a>
			<p>$<?= $ad['price'] ?></p>
		</div>
	<?php endforeach ?>



