<!--Page for user account home-->
<div class="text-center" id="userInfo">
	<h2>User Info</h2>
		<p><strong>Full Name:</strong> <?= Auth::user()->name ?></p>
		<p><strong>Username:</strong> <?= Auth::user()->username ?></p>
		<p><strong>Email:</strong> <?= Auth::user()->email ?></p>
	<br>
	<a href="/update" class="btn btn-primary">Update Account</a>
	<a href="/create" class="btn btn-primary">Create New Ad</a>
</div>

<div>
	<h2 class="text-center">Your Ads</h2>
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