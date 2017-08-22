<!--Page for single advertisement -->
<div class="container">
	<div class="well text-center col-md-12">
		<h4><?= $ad->name ?></h4>
		<p>Description: <?= $ad->description ?></p>
		<img class='ad-img' src=<?= $ad->image ?> alt="">
	</div>
</div>
