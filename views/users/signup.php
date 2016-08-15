<?php 

require_once '../views/partials/head.php';

?>
<div class="container col-sm-10">

	<section id="login">

		<div class="row text-center">

			<h1 class="section-title">Signup For a PokéDoption account!</h1>
			<h3>Please write down your password and keep it in a safe place. 
				<br>We do not offer account recovery services.</h3>
			<div class="col-md-6 col-md-offset-3">
				<hr>

				<p>Fill out the information below so we can create your account.</p>
 				<?php if (isset($_SESSION['SIGNUP_ERROR'])) : ?>
	                <div class="alert alert-danger">
	                    <p class="error"><?= $_SESSION['SIGNUP_ERROR']; ?></p>
	                </div>
	                <?php unset($_SESSION['SIGNUP_ERROR']); ?>
	            <?php endif; ?>
				<form method="POST" action="" data-validation data-required-message="This field is required">
					<div class="form-group">
						<p>Username</p>
					    <input type="text" minlength="3" maxlength="20" class="form-control" name="new_user" placeholder="Username" data-required>
					</div>
					<div class="row">
						<input name="password" minlength="3" maxlength="20" required="required" type="password" placeholder="Password"/>
						<input name="password_confirm" minlength="3" maxlength="20" required="required" type="password" oninput="check(this)" placeholder="Confirm Password" />
					</div>
					<div class="row">
						<div class="col-sm-6 text-right">
							<button type="submit" class="btn btn-primary">Signup Now</button>
						</div>
						<div class="col-sm-6 text-left">
							<a href="/login" class="btn btn-success">Go To Login</a>
						</div>
					</div>

				</form>

			</div>

		</div>

	</section>

</div>
<?php require_once '../views/partials/scripts.php'; ?>
