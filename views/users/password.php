<?php

$errorMessage = isset($_SESSION['ERROR_MESSAGE'])? ($_SESSION['ERROR_MESSAGE']) : '';
$passError = isset($_SESSION['PASS_ERROR'])? ($_SESSION['PASS_ERROR']) : '';

?>

    <div class="container">

    <section id="login">

        <div class="row">
        

            <h1 class="section-title">Change password</h1>

            <div class="col-md-6 col-md-offset-3">
                

                <form method="POST" action="/password" data-validation data-required-message="This field is required">


                    <div class="form-group">
                        <label for="currentPassword">Enter your current password</label>
                        <input type="password" class="form-control" id="currentPassword" name="currentPassword" <?php if(!empty($_POST)): ?> value='<?= $_POST['currentPassword']?>' <?php endif ?> placeholder="Current password" required>
                        <p class="alert-danger"><?php echo $errorMessage; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="enterNew">Enter new password</label>
                        <input type="password" class="form-control" id="enterNew" name="enterNew" <?php if(!empty($_POST)): ?> value='<?= $_POST['enterNew']?>' <?php endif ?> placeholder="Enter new password" required>
                    </div>
                        <div class="form-group">
                    	<label for="reEnterNew">Re-enter new password</label>
                        <input type="password" class="form-control" id="reEnterNew" name="reEnterNew" value="" placeholder="Re-enter new password" required>
                        <p class="alert-danger"><?php echo $passError; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/account" class="btn btn-primary">Cancel</a>
                        </div>
                        <div class="col-sm-6 password-right">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </section>

</div>
