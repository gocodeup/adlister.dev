

<!-- The code commented out is what was here before....Andrew your code is below this. Was this commented code placed by Codeup??

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

</div> -->



<!--Andrew this is your code from user.edit, after being routed -->

<?php 

require '../utils/Input.php'; 

?>

<form method="POST" action="./users/edit.php" enctype="multipart/form-data">
	<fieldset class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="title" maxlength="50" value="<?php if (Input::has('name')) echo $_POST['title']; ?>" required>
    </fieldset>
    <fieldset class="form-group">
        <label>E-Mail</label>
        <input type="text" class="form-control" name="title" maxlength="50" value="<?php if (Input::has('email')) echo $_POST['title']; ?>" required>
    </fieldset>
    <fieldset class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="title" maxlength="20" value="<?php if (Input::has('username')) echo $_POST['title']; ?>" required>
    </fieldset>
    <fieldset class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" name="title" maxlength="20" required>
    </fieldset>
    <fieldset class="form-group">
        <label>Confirm Password</label>
        <input type="text" class="form-control" name="title" maxlength="20" required>
    </fieldset>
    <button type="submit" class="btn btn-primary">Update</button>
</form>