<!--Page for single advertisement -->
<div class="col-md-5">
	<div class="row">
		<img class="img-thumbnail img-responsive" alt="<?= $items->name ?>" src="<?= $items->image ?>">
	</div>
</div>
<div class="col-md-6">
	<div class="row">
	<div class="col-md-6">
		<h2><?= $items->name ?></h2>
		<h2><small>$<?= $items->price ?></small></h2>
	</div>
	<div class="col-md-6">
		<h3>Posted By:</h3>
		<h4><a href="/account/?id=<?= $items->user()->id ?>"><?= $items->user()->username ?></a></h4>
	</div>
		<?php var_dump($user); ?>
	</div>
	<hr>
	<div class="row">
		<h3>Description</h3>
	</div>
	<div class="row">
		<p><?= $items->description ?></p>
	</div>
</div>
