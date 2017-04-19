<!--Page for single advertisement -->
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading" style="color: white">ITEM</div>
				<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
				<div class="panel-footer">Full Description</div>
				<a href="/account">Posted by</a> <!-- can be put anywhere you want -->
			</div>
		</div>
	</div><!-- ends row -->
</div><!-- ends container -->

<?php if (Auth::id()): ?>
	<button style="margin:5%" type="submit" class="btn btn-primary">Edit Ad</button>
	<button style="margin:5%" type="submit" class="btn btn-primary pull-right">Delete Ad</button>
<?php endif; ?>