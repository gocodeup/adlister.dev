<!--Page for user account home-->
<div class="container view">
<div class="row">
	<div class="col-md-5 col-md-offset-1">
		<h3>User Info</h3>
		<p>
		<strong>Name: </strong><?= $user->name ?>
		</p>
		<p>
		<strong>Username: </strong><?= $user->username ?>
		</p>
		<p>
		<strong>Email: </strong><?= $user->email ?>
		</p>
		<a href="/account/edit/?id=<?= $user->id ?>" class="btn btn-primary">Edit Account</a>
	</div>
	<div class="col-md-6">
		<h3>Your Gavlistings</h3>
		<?php foreach($items->attributes as $key => $item) : ?>
			<h4><?= $item['name']; ?></h4>
			<p>
				<?= substr($item['description'], 0, 100) . "..."; ?>
			</p>
			<p>
				<a href="/ads/show/?id=<?= $item['id']; ?>">See More</a>
			</p>
		<?php endforeach; ?>
		<a href="/ads/create" class="btn btn-primary">New Listing</a>
	</div>
</div>
</div>