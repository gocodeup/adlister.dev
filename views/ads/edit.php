<!--Page that includes the form to edit an existing ad-->
<div class="container view">
	<section id="edit">
		<div class="row">
			<h1 class="section-title">Edit Your listing!</h1>
			<div class="col-md-6 col-md-offset-3">
				<p>Please fill out the information below so we can update your listing.</p>
				<div class="file-tab panel-body">
                    <label class="btn btn-default btn-file">
                        <span>Browse</span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file">
                    </label>
                    <button type="button" class="btn btn-default">Remove</button>
                </div>







				<form method="POST" action="" data-validation data-required-message="This field is required">
					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Change the Name of your Listing" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="description" name="description" placeholder="Change the Description of your Listing" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="price" name="price" placeholder="Change the Price of your Listing" data-required>
					</div>
					<div class="form-group">
						<label for="image">Image Upload</label>
						<input type="file" id="image" name="image" placeholder="Image of your Listing">
					<button type="submit" class="btn btn-primary">Update Listing</button>
				</form>
			</div>
		</div>
	</section>
</div>
