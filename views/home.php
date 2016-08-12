<?php
require_once __DIR__ . "/partials/navbar.php";


?>

<div class="container">
	<section id="welcome">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-center">Welcome To Fadlister</h1>
			</div>
		</div>
	</section>
	<section id="features">
		<div class="row">
			<h3 class="section-title">Featured Fads</h3>
				<!-- Placeholder for featured items.-->
			<div class="jumbotron">
				<div class="container" id="tourpackages-carousel">
					<div class="row">
						<?php foreach ($ads as $ad) { ?>
						<div class="col-xs-18 col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src=<?= "../img/{$ad->id}.jpg" ?> alt="">
								<div class="caption">
								  	<h4><?= $ad->title ?></h4>
								  	<p><?= $ad->description ?></p>
								  	<p><a href="#" class="btn btn-info btn-xs" role="button">See more</a></p>
							  	</div>
							</div>
						</div>
						<?php  }; ?>
					</div><!-- End row -->
				</div><!-- End container -->
			</div>
		</div>
	</section>

</div>