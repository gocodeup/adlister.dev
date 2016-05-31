<?php 

require_once '../models/User.php';

	if (!empty($_POST))   {  
	$user = new User;
	$user->name = Input::get('name');
	$user->email = Input::get('email');
	$user->password = Input::get('password');
	$user->location = Input::get('location');
	$user->username = Input::get('username');
	$user->save();

	header('Location: login');
	exit();
}
?>

<div class="container">
	<section id="login">

		<div class="row">
        	<div class="col-sm-2 col-md-2">
            	<img src="/img/cornerstore.png">
        	</div>

        	<div class="col-sm-8 col-md-8 text-left">
            	<h1 class="section-title header-margin">Signup for Peddler's Corner</h1>
        	</div>
    	</div>

    	<hr>

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

			<form method="POST" action="" data-validation data-required-message="This field is required">

				<div class="form-group">
				    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required="required">
				</div>

				<div class="form-group">
				    <input type="text" class="form-control" id="location" name="location" placeholder="Location" required="required">
				</div>

				<div class="form-group">
				    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="required">
				</div>

				<div class="form-group">
				    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
				</div>

				<div class="form-group">
				    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
				</div>

				<div class="row">
					<div class="col-sm-6">
						<button type="submit" class="btn btn-primary">Signup</button>
					</div>
					<div class="col-sm-6">
						<a href="/login" class="btn btn-success">Go To Login</a>
					</div>
				</div>

			</form>

		</div>
	</section>
</div>