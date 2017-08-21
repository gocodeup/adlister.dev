<!--Page for an index of advertisements-->
<?php

	$ads = Ad::all();

 ?>

<div class="container">
	<?php foreach($ads as $ad): ?>
	<div class="well text-center col-md-6">
		<h4><?= $ad->name ?></h4>
		<p>Description: <?= $ad->description ?></p>
	</div>
<?php endforeach; ?>
</div>
