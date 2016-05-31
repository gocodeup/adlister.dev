<?php

require_once __DIR__ . '/../../models/User.php';
require_once __DIR__ . '/../../utils/Auth.php';

$user = User::find(Auth::id());
if(!empty($_POST)) {
	$user->name = Input::get('name');
	$user->email = Input::get('email');
	$user->username = Input::get('username');
	$user->password = Input::get('password');
	$user->location = Input::get('location');
	$user->save();

	header('Location: ../account');
	exit();	
}

?>

<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title">Edit Account</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Please fill out the information below so we can update your account.</p>
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

				<form method="POST" action="edit" data-validation data-required-message="This field is required">

					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $user->name; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->email; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user->username; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="location" name="location" placeholder="Location" value="<?= $user->location; ?>" data-required>
					</div>
					<button type="submit" class="btn btn-primary">Update Account</button>

				</form>

			</div>

		</div>

	</section>

</div>