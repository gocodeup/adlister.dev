
<!--Page for single advertisement -->
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
					<div class="panel-heading"><?= $showItem->title ?><div class="pull-right"><?= "$" . $showItem->price ?></div></div>
					<div class="panel-body"><img src=<?= "$showItem->image" ?> class="img-responsive" style="width:100%; height:250px" alt="Image"></div>
					<div class="panel-footer"><?= $showItem->description ?></div>
				<div>Posted by <?= $user->username ?></div> 
			</div>
		</div>
	</div><!-- ends row -->
</div><!-- ends container -->
<?php if (Auth::id() == $showItem->user_id): ?>
	<a style="margin:5%" href="" class="btn btn-primary" data-toggle="modal" data-target="#editAd">Edit Ad</a>
	<a style="margin:5%" class="btn btn-primary pull-right" href="" data-toggle="modal" data-target="#deleteAd">Delete Ad</a>
<?php endif; ?>


	<!-- Deleting Ad Modal -->
	<div id="deleteAd" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Deleting Ad</h4>
				</div>
				<div class="modal-body">
					<form  method="POST">
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Title: </label>
								<?=$showItem->title?>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Price: </label>
								<?="$".$showItem->price?>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Location: </label>
								<?=$showItem->location?>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Description: </label>
								<?=$showItem->description?>
							</div>
						</div>
						<div class="modal-footer">
							<a href="/delete" type="submit" class="btn btn-default btn-success">Confirm Delete</a>
							<button type="submit" data-dismiss="modal" class="btn btn-default btn-danger">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>




		<!-- Editing Ad Modal -->
	<div id="editAd" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Ad</h4>
				</div>
				<div class="modal-body">
					<form  method="POST">
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Title: </label>
								<input value="<?=$showItem->title?>" type="text" name="">
								
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Price: </label>
								<input value="<?="$".$showItem->price?>" type="text" name="">
								
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Location: </label>
								<input value="<?=$showItem->location?>" type="text" name="">
								
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Description: </label>
								<textarea rows="4" class="form-control"><?=$showItem->description?></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<a href="/delete" type="submit" class="btn btn-default btn-success">Update Ad</a>
							<button type="submit" data-dismiss="modal" class="btn btn-default btn-danger">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>