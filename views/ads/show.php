<!--Page for single advertisement -->
<div class="container">
	<div class="well text-center col-md-9">
		<img class='ad-img' src=<?= $ad->image ?> alt="">
	</div>
	<div class="text-left col-md-3">
		<div class="text-right">
			<a href="/index">
				<div class="close">
					⊗
				</div>
			</a>
		</div>
		<br>
		<h2><?= $ad->name ?></h2>
		<br>
		<p>Description: <?= $ad->description ?></p>
		<p>Seller: <?= $ad->username?></p>
		<p>Contact <?=$ad->username?>: <a href="mailto:<?=$ad->email?>?Subject=I%20want%20to%20buy%20your%20old%20stuff" ><?=$ad->email?></a></p>
	</div>
</div>
