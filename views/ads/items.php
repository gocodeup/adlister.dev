<?php
require_once __DIR__ . '/../../controllers/PageController.php';

 ?>
<div class="container">
	<div class="row">
		<?php foreach($adListings as $ad) { ?>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel-heading"><a href="/show?id=<?= $ad->id ?>" style="color: white"><?= $ad->title ?><div class="pull-right"><?= "$" . $ad->price ?></div></div>
					<div class="panel-body"><img src=<?= "$ad->image" ?> class="img-responsive" style="width:100%; height:250px" alt="Image"></div></a>
					<div class="panel-footer"><?= $ad->description ?></div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
