<?php

if(!empty($_POST)) {
    $user = new User();
    $errors = [];

    try {
        $user->name = User::getString('name');
    } catch (Exception $e) {
        $errors['name'] = $e->getMessage();
    }
    try {
        $user->email = User::getString('email');
        $emailFound = User::findByEmail($user->email);
        if($emailFound) {
            throw new Exception("That email is already in use.");
        }
    } catch (Exception $e) {
        $errors['email'] = $e->getMessage();
    }
    try {
        $user->username = User::getString('username');
        $usernameFound = User::findByEmail($user->username);
        if($usernameFound) {
            throw new Exception("That email is already in use.");
        }
    } catch (Exception $e) {
        $errors['username'] = $e->getMessage();
    }
    try {
        $user->password = User::getString('password');
    } catch (Exception $e) {
        $errors['password'] = $e->getMessage();
    }

    foreach($_REQUEST as $key => $value) {
        if(($value === "" || $value == null) && $key != 'submit') {
            $errors[$key] = "Please fill in your " . str_replace('_', ' ', $key);
        }
    }
    if(empty($errors))
    {
        $user->insert();
        echo "Inserted!";
    }
}

?>
<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title">Signup For OooLister</h1>

            <div class="col-md-6 col-md-offset-3">

                <p>Please fill out the information below so we can create your account.</p>

                <form method="POST" action="" data-validation data-required-message="This field is required">

                    <?php
                    if(isset($_POST['submit']) && !empty($errors['name'])) {
                        echo '<div class="alert alert-danger"><p class="error">' . $errors['name'] . '</p></div>';
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" data-required>
                    </div>
                    <?php
                    if(isset($_POST['submit']) && !empty($errors['email'])) {
                        echo '<div class="alert alert-danger"><p class="error">' . $errors['email'] . '</p></div>';
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
                    </div>
                    <?php
                    if(isset($_POST['submit']) && !empty($errors['username'])) {
                        echo '<div class="alert alert-danger"><p class="error">' . $errors['username'] . '</p></div>';
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" data-required>
                    </div>
                    <?php
                    if(isset($_POST['submit']) && !empty($errors['password'])) {
                        echo '<div class="alert alert-danger"><p class="error">' . $errors['password'] . '</p></div>';
                    }
                    ?>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" name="submit" class="btn btn-primary">Signup</button>
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
