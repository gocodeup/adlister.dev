<?php 

require '../utils/Input.php'; 

?>

<form method="POST" action="./users/create.php" enctype="multipart/form-data">
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>