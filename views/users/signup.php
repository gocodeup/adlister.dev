<?php 

function showErrorMsg($key)
{
    $errorMsg = '';

    if (isset($_SESSION['ERROR_MESSAGES'][$key])) {
        $errorMsg = <<<HTML
        <div class="alert alert-danger">
            <p class="error">
                {$_SESSION['ERROR_MESSAGES'][$key]}
            </p>
        </div>
HTML;
        unset($_SESSION['ERROR_MESSAGES'][$key]);
    }

    return $errorMsg;
}

?>

<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title text-center">Signup For OooLister</h1>

            <div class="col-md-6 col-md-offset-3">

                <p class="text-center">Please fill out the information below so we can create your account.</p>

                <form method="POST" action="">

                    <?php echo showErrorMsg('name'); ?>
                    <div class="form-group">
                        <input type="text" class="form-control input-required" id="name" value="" name="name" placeholder="Full Name" required>
                    </div>
                    <?php echo showErrorMsg('email'); ?>
                    <div class="form-group">
                        <input type="text" class="form-control input-required" id="email" value="" name="email" placeholder="Email" required>
                    </div>
                    <?php echo showErrorMsg('username'); ?>
                    <div class="form-group">
                        <input type="text" data-min-length="<?php echo User::getMinimum('username'); ?>" class="form-control input-required" id="username" value="" name="username" placeholder="Username" required>
                    </div>
                    <?php echo showErrorMsg('password'); ?>
                    <div class="form-group">
                        <input type="password" data-min-length="<?php echo User::getMinimum('password'); ?>" class="form-control input-required" id="password" name="password" placeholder="Password" required>
                    </div>
                    <?php echo showErrorMsg('password-confirm'); ?>
                    <div class="form-group">
                        <input type="password" class="form-control input-required" id="password-confirm" name="password-confirm" placeholder="Confirm Password" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="/login/" class="btn btn-success">Log In</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>