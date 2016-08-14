<div class="container">
	<section>
		<h1 class="section-title">All Gavlistings</h1>
		<br>

		<?php foreach ($items->attributes as $item): ?>

			<div class="col-xs-4">
				<a href="#"><img class="img-thumbnail img-responsive featured-image" alt="<?= $item['name']; ?>" src="<?= $item['image']; ?>"></a>
				<br>
				<h4><?= $item['name']; ?></h4>
				<div><?= $item['description']; ?></div>
				<br>
				<strong>$<?= $item['price']; ?></strong>
				<hr>
			</div>
		<?php endforeach ?>
	</section>
</div>