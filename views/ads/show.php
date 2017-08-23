<!--Page for single advertisement -->
<div class="container">
	<div class="well text-center col-md-12">
		<a href="/index">
		<div class="close">
			⊗
		</div>
		</a>
		<h4><?= $ad->name ?></h4>
		<p>Description: <?= $ad->description ?></p>
		<img class='ad-img' src=<?= $ad->image ?> alt="">
		<p>Seller: <?= $ad->username?></p>
	</div>
</div>
