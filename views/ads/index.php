<!--Page for an index of advertisements-->
<div class="container">
	<?php foreach($ads as $ad): ?>
		<a href="/show?ad=<?php echo($ad->id) ?>">
			<div class="well text-center col-md-6">
				<h4><?= $ad->name ?></h4>
				<p>Description: <?= $ad->description ?></p>
			</div>
		</a>
	<?php endforeach; ?>
</div>
