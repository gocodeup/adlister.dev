<?php
require_once __DIR__ . '/../../controllers/PageController.php';

 ?>
 
<div class="container">
	<div class="row">
		<?php foreach($adListings as $ad) { ?>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel-heading"><a href="#" style="color: white"><?= $ad->title ?><div class="pull-right"><?= "$" . $ad->price ?></div></a></div>
					<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
					<div class="panel-footer"><?= $ad->description ?></div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
