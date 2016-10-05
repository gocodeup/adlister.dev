<div class="container view">
	<section>
		<h1 class="section-title">All Listings</h1>
		<br>

		<?php foreach ($items->attributes as $item): ?>

			<div class="col-xs-4">
				<a href="/ads/show/?id=<?= $item['id'] ?>"><img class="img-thumbnail img-responsive featured-image" alt="<?= $item['name']; ?>" src="<?= $item['image']; ?>"></a>
				<br>
				<h4></h4>
				<strong>price</strong>
				<hr>
			</div>
		
	</section>
</div>