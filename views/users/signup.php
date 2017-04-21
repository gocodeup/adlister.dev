<link rel="stylesheet" href="/../css/items_styles.css">

<div class="container">

    <section id="login">

        <h1 class="section-title">Signup For Pie Piper</h1>
        <div class="row">


            <div class="col-sm-6 offset-sm-0 col-md-6 offset-md-3">

                <p id="form-description">Please fill out the information below so we can create your account.</p>
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
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" data-required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" data-required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary">Signup</button>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="/login" class="btn btn-success">Go To Login</a>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </section>

</div>
