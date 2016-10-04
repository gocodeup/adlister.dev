<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title">Login To PokéDoption!</h1>

            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                <div class="alert alert-success">
                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                </div>
                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
			<?php elseif (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                <div class="alert alert-danger">
                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                </div>
                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
            <?php endif; ?>

			<div class="col-md-6 col-md-offset-3">

				<p>Login with your email/username and password</p>

				<form method="POST" action="" data-validation data-required-message="This field is required">
					<div class="form-group">
					    <input type="text" minlength="3" maxlength="20" class="form-control" id="username" name="username" placeholder="Username" data-required>
					</div>
					<div>
						<input type="password" minlength="3" maxlength="20"  id="password" name="password" placeholder="Password" data-required />
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary">Log In</button>
						</div>
				</form>
				<div class="col-sm-6 text-right">
					<a href="/signup" class="btn btn-success">Go To Signup</a>
				</div>
			</div>
		</div>

	</section>

</div>