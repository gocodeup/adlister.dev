<!--Page for single advertisement -->
<div class="container view">
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
		</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-8">
				<h3>Description</h3>
				<p><?= $items->description ?></p>
			</div>
		</div>
	</div>
</div>

