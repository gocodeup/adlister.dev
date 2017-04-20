
<!--Page for single advertisement -->
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
					<div class="panel-heading"><a href="/show?id=<?= $showItem->id ?>" style="color: white"><?= $showItem->title ?><div class="pull-right"><?= "$" . $showItem->price ?></div></a></div>
					<div class="panel-body"><img src=<?= "$showItem->image" ?> class="img-responsive" style="width:100%; height:250px" alt="Image"></div>
					<div class="panel-footer"><?= $showItem->description ?></div>
				<a href="/account">Posted by <?= $user->username ?></a> <!-- can be put anywhere you want -->
			</div>
		</div>
	</div><!-- ends row -->
</div><!-- ends container -->

<?php if (Auth::id()): ?>
	<button style="margin:5%" type="submit" class="btn btn-primary">Edit Ad</button>
	<button style="margin:5%" type="submit" class="btn btn-primary pull-right">Delete Ad</button>
<?php endif; ?>