<div class="container">

	<section id="create">

		<div class="row">

			<h1 class="section-title">Create A Gavlisting!</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Fill out the required fields for a Gavin below.</p>
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
					    <input type="text" class="form-control" id="name" name="name" placeholder="Name of Gavin" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="description" name="description" placeholder="Describe your Gavin" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="price" name="price" placeholder="Price of Gavin" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="img" name="img" placeholder="Picture of Gavin" data-required>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary">Create</button>
						</div>
						<div class="col-sm-6 text-right">
							<a href="/edit" class="btn btn-success">Go To My Gavlistings</a>
						</div>
					</div>

				</form>

			</div>

		</div>

	</section>

</div>