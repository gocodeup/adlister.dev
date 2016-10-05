<div class="container">
	<section id="login">
		<div class="row">
			<h1 class="section-title">Edit Account</h1>
			<div class="col-md-6 col-md-offset-3">
				<form method="POST" action="" data-validation data-required-message="This field is required">
					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $user->name; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->email; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user->username; ?>" data-required>
					</div>
					<button type="submit" class="btn btn-primary">Update Account</button>
				</form>
			</div>
		</div>
	</section>
</div>