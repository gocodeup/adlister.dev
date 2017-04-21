<div class="container">
	<div class="row" id="itemsPage">
		<?php foreach($adListings as $ad) : ?>
			<div class="col-sm-4" >
				<a href="/show?id=<?= $ad->id ?>" id="items">
					<div class="panel panel-primary">
						<div class="panel-heading"><?= $ad->title ?><div class="pull-right"><?= "$" . $ad->price ?></div></div>
						<div class="panel-body"><img src=<?= "$ad->image" ?> class="img-responsive" id="itemsImages" alt="Image"></div>
						<div class="panel-footer"><?= substr($ad->description, 0, 25) . "..." ?></div>
					</div>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</div>