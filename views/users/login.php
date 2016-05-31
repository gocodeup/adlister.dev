<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../database/db_connect.php';
require_once __DIR__ . '/../../bootstrap.php';

 
    $email = Input::get('email_user');
    $username = Input::get('email_user');
    $password = Input::get('password');

    Auth::attempt($username,$password);

    if (Auth::attempt($username,$password)) {
        header('Location: /users/account');
        exit(); 
    } 
// var_dump($auth->username);
// var_dump($auth->password);
// var_dump($_POST);
// var_dump($_SESSION);

?>
<div class="container" id="container">

	<section id="login">

		<div class="row">
			<h1 class="login-title">Login To Sell Your Crap!</h1>

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

			<div class="col-md-6 col-md-offset-3">
				<form method="POST" action="" data-validation data-required-message="This field is required">
					<div class="form-group">
					    <input type="text" class="form-control input-lg" id="email_user" name="email_user" placeholder="Email or Username" data-required>
					</div>
					<div class="form-group">
					    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" data-required>
					</div>
					<div class="row">
						<div class="col-sm-12 text-right">
							<input type="Submit" class="btn btn-danger btn-lg login-btn sign-up-btn">

							<a href="/signup" class="btn btn-danger btn-lg sign-up-btn">GO TO SIGN UP</a>
						</div>
					</div>
				</form> <!-- end form POST -->
			</div> <!-- class md 6 offset 3 -->

		</div> <!-- end row -->

	</section>

</div>