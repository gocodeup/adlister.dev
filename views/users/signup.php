<html>
<head>
<?php require 'temp-head.php'; ?>


    <title>Create New User</title>
</head>
<body>
<?php require "temp-navbar.php"; ?>

<center>Creating A New User</center>    
<div class="container">
	<section id="login">
		<div class="row">
		    <div class="col s12 m6 l4 offset-m3 offset-l4">
		        
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

		        <form class="col s12" method="POST" action="" data-validation data-required-message="This field is required">
		          <div class="row">
		            <div class="input-field">
		              <input placeholder="First Name" id="first_name" type="text" class="validate"  data-required>
		            </div>
		          </div>  
		          <div class="row">  
		            <div class="input-field">
		              <input placeholder="Last Name" id="last_name" type="text" class="validate"  data-required>
		            </div>
		          </div>
		          <div class="row">
		            <div class="input-field">
		              <input placeholder="Password" id="password" type="password" class="validate"  data-required>
		            </div>
		          </div>
		          <div class="row">
		            <div class="input-field">
		              <input placeholder="Confirm Password" id="confirmPassword" type="password" class="validate"  data-required>
		            </div>
		          </div>
		          <div class="row">
		            <div class="input-field">
		              <input placeholder="Email" id="email" type="email" class="validate"  data-required>
		            </div>
		          </div>
		          <div class="row">
		            <div class="col s12 m8 l4 offset-m2 offset-l4">
		              <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
                	  <button href="/login" class="btn btn-success">Go To Login</button>
		            </div>
		          </div>
		        </form>
		    </div>
		</div>
	</section>
</div>

<?php require 'temp-foot.php'; ?>
</body>
</html>



