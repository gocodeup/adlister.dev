<!DOCTYPE html>
<html>
    <title>Adlister</title>

<div class="container">

    <section id="signup">

        <div class="row">
            <div id='broccoliIcon'>

                    <h1 class="section-title">Sign-Up for Veggie Connect</h1>
                
                    <img src="broccolilogo.png" class="yonsei-logo rotate brocc">

            </div>

           

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

                <p>Sign-up with your email/username and password.</p>

                <form method="POST" action="" data-validation data-required-message="This field is required">

                    <div class="form-group">
                        <input type="text" class="form-control" id="email_user" name="email_user" placeholder="EMAIL OR USERNAME" data-required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="PASSWORD" data-required>
                    </div>
                    <div class="row">
                        <div class="column one-half loginButtonRow">
                            <a href="/login" id="loginButton" class="button btn btn-success">ALREADY A MEMBER? LOGIN</a>
                        </div>
                        <div class="column one-half loginButtonRow">
                            <button class="button btn btn-primary">SIGN-UP</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </section>

</div>

</html>
