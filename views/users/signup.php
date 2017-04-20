<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title">Signup For OooLister</h1>

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

                <form method="POST" action="/signup" data-validation data-required-message="This field is required">
                    
                <?php if(empty($errors['name'])): ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" data-required value="<?= Input::escape(Input::get('name')); ?>">
                    </div>

                <?php else: ?>
                    <div class="form-group has-error">
                        <input type="text" class="form-control" id="name" name="name" placeholder="<?= Input::escape($errors['name']); ?>" data-required >
                    </div>
                <?php endif; ?>

                <?php if(empty($errors['email'])): ?>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" data-required value="<?= Input::escape(Input::get('email')); ?>">
                    </div>
                <?php else: ?>
                    <div class="form-group has-error">
                        <input type="email" class="form-control" id="email" name="email" placeholder="<?= Input::escape($errors['email']); ?>" data-required>
                    </div>
                <?php endif; ?>

                <?php if(empty($errors['username'])): ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" data-required value="<?= Input::escape(Input::get('username')); ?>">
                    </div>
                <?php else: ?>
                    <div class="form-group has-error">
                        <input type="text" class="form-control" id="username" name="username" placeholder="<?= Input::escape($errors['username']); ?>" data-required >
                    </div>
                <?php endif; ?>

                <?php if(empty($errors['password'])): ?>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                    </div>
                <?php else: ?>
                    <div class="form-group has-error">
                        <input type="password" class="form-control" id="password" name="password" placeholder=Password data-required>
                    </div>
                <?php endif; ?>

                <?php if(empty($errors['passwordConfirm'])): ?>
                    <div class="form-group">
                        <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm Password" data-required>
                    </div>
                <?php else: ?>
                    <div class="form-group has-error">
                        <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm Password" data-required>
                    </div>
                <?php endif; ?>                

                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary" value="signup">Signup</button>
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