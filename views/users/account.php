<!--Page for user account home-->
<div class="text-center" id="userInfo">
	<h2 style="font-size: 3em">User Info</h2>
	<p style="font-size: 1.5em"><strong>Full Name:</strong> <?= Auth::user()->name ?></p>
	<p style="font-size: 1.5em"><strong>Username:</strong> <?= Auth::user()->username ?></p>
	<p style="font-size: 1.5em"><strong>Email:</strong> <?= Auth::user()->email ?></p>
	<br>
	<a href="/update" class="btn btn-primary">Update Account</a>
	<a href="/create" class="btn btn-primary">Create New Ad</a>
</div>

<div class="text-center">
	<h2>Your Ads</h2>
	<div class="container">
		<div class="row" id="itemsPage">
			<?php foreach($adListings as $ad) : ?>
				<div class="col-sm-4" >
					<a href="/show?id=<?= $ad->id ?>" id="items">
						<div class="panel panel-primary">
							<div class="panel-heading" id="itemsPanelColor"><?= $ad->title ?><div class="pull-right"><?= "$" . $ad->price ?></div></div>
							<div class="panel-body"><img src=<?= "$ad->image" ?> class="img-responsive" id="itemsImages" alt="Image"></div>
							<div class="panel-footer"><?= substr($ad->description, 0, 25) . "..." ?></div>
						</div>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>