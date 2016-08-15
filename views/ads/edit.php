<!--Page that includes the form to edit an existing ad-->
<div class="container view">

	<section id="edit">

		<div class="row">

			<h1 class="section-title">Edit Your Gavlisting!</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Please fill out the information below so we can update your Gavlisting.</p>
				<?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
	                <div class="alert alert-danger">
	                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
	                </div>
	                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
	            <?php endif; ?>
	            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
	                <div class="alert alert-success">
	                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
	                </div>
	                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
	            <?php endif; ?>

				<form method="POST" action="" data-validation data-required-message="This field is required">

					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Change the Name of your Gavin" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="description" name="description" placeholder="Change the Description of your Gavin" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="price" name="price" placeholder="Change the Price of your Gavin" data-required>
					</div>
					<div class="form-group">
						<label for="image">Image Upload</label>
						<input type="file" id="image" name="image" placeholder="Image of your Gavin">
						<p>Note: Uploading any image will replace a current image.</p>
					<button type="submit" class="btn btn-primary">Update Gavlisting</button>

				</form>

			</div>

		</div>

	</section>

</div>
