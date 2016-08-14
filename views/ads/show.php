<!--Page for single advertisement -->
<div class="col-md-6">
		<a href="#"><img class="img-thumbnail img-responsive featured-image" alt="<?= $item['name']; ?>" src="<?= $item['image']; ?>"></a>
		<br>
		<h4><?= $item['name']; ?></h4>
</div>
<div class="col-md-6">
		<div><?= $item['description']; ?></div>
		<br>
		<strong><?= $item['price']; ?></strong>
		<hr>
</div>
