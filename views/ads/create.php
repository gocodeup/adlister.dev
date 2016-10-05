<div class="container view">
	<section id="create">
		<div class="row">
			<h1 class="section-title">Create Alisting!</h1>
			<div class="col-md-6 col-md-offset-3">
				<form method="POST" action="" data-validation data-required-message="This field is required" enctype="multipart/form-data">
					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Name of listing" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="description" name="description" placeholder="Describe your listing" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="price" name="price" placeholder="Price of listing" data-required>
					</div>
					<div class="form-group">
						<label for="image">Image Upload</label>
						<input type="file" id="image" name="image" placeholder="Image of your Listing">
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary">Create</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
