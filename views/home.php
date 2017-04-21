<div class="container">

	<section id="welcome">
		<div class="row">
			<div class="col-xs-12">
				<h1 id="homeTitle" class="text-center">Welcome To SnapList</h1>
			</div>
		</div>
	</section>

	<section id="features">
		<div class="row">
			<h2 class="section-title text-center">Featured Items</h2>
			<div class="container">
				<div class="row">
					<?php foreach($selectThree as $ad) : ?>
						<div class="col-sm-4">
							<a href="/show?id=<?= $ad->id ?>" id="homeItemPanel" >
								<div class="panel panel-primary">
									<div class="panel-heading" id="itemsPanelColor"><?= $ad->title ?><div class="pull-right"><?= "$" . $ad->price ?></div></div>
									<div class="panel-body"><img src=<?= "$ad->image" ?> class="img-responsive" id="homeItemImage" alt="Image"></div>
									<div class="panel-footer"><?= substr($ad->description, 0, 25) . "..." ?></div>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div><!-- ends container -->
		</div>
	</section>

	<a href="/items" id="homeViewAll" class="btn btn-primary" id="itemsPanelColor">View All Items</a>
	
</div>