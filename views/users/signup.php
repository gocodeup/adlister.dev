<?php 

require_once '../views/partials/head.php';

$username = Input::get('username');
$password = Input::get('password');

?>
<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title">Signup For a Non-Functioning Website</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Please fill out the information below so we can create your account.</p>
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
	            <?php if (isset($username)) : ?>
	            	<?php require '../views/users/signup_check.php'; ?>
	     		<?php endif; ?>
				<form method="POST" action="" data-validation data-required-message="This field is required">
					<div class="form-group">
						<p>Username</p>
					    <input type="text" minlength="3" maxlength="20" class="form-control" id="username" name="username" placeholder="Username" data-required>
					</div>
					<div>
						<p>Password:</p>
						<input name="password" minlength="3" maxlength="20" required="required" type="password" id="password" />
						<p>Confirm Password:</p>
						<input name="password_confirm" minlength="3" maxlength="20" required="required" type="password" id="password_confirm" oninput="check(this)" />
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary">Signup</button>
						</div>
						<div class="col-sm-6 text-right">
							<a href="/login" class="btn btn-success">Go To Login</a>
						</div>
					</div>

				</form>

			</div>

		</div>

	</section>

</div>
<?php require_once '../views/partials/scripts.php'; ?>
