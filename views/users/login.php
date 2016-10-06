<div class="container view">
	<section id="login">
		<div class="row">
			<center><h1 class="section-title">Login To KirkZay</h1></center>
			<div class="col-md-6 col-md-offset-3">
				<p>Login with your email/username and password</p>
				<form method="POST" action="" data-validation data-required-message="This field is required">
					<div class="form-group">
					    <input type="text" class="form-control" id="email_user" name="email_user" placeholder="Email or Username" data-required>
					</div>
					<div class="form-group">
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-warning">Login</button>
						</div>
						<div class="col-sm-6 text-right">
							<button href="/account/signup" class="btn btn-success">Go To Signup</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
