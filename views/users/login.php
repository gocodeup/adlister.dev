<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title text-center">Log In To OooLister</h1>

            <div class="col-md-6 col-md-offset-3">

                <p class="text-center">Log in with your email/username and password</p>

                <form method="POST" action="">

                    <div class="form-group">
                        <?php if (isset($_SESSION['ERROR_MESSAGE'])): ?>
                            <div class="alert alert-danger">
                                <p class="error">
                                    <?php echo $_SESSION['ERROR_MESSAGE']; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                            <div class="alert alert-success">
                                <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                            </div>
                            <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
                        <?php endif; ?>
                        <input type="text" class="form-control input-required" id="email_user" name="username" placeholder="Username or Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-required" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" name="login" class="btn btn-primary">Log In</button>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="/signup/" class="btn btn-success">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>