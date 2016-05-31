<?php

$username= input::has('email') ? input::get('email'): '';
$password= input::has('password') ? input::get('password'): '';

if (Auth::check()) {
    foreach ($users as $user) {
        $id = $user['id'];
        header("Location: /users/account?id=$id");
        die();
    }
}

if (!empty($_POST)){
    if (Auth::attempt($username, $password)){
        foreach ($users as $user) {
            if ($user['email'] == $_POST['email']) {
                $id = $user['id'];
                header("Location: /users/account?id=$id");
                die();
            }
        }
    }
}


?>



<div class="container">
  <section id="login">
    <div class="row">
        <h1 class="section-title">Login To Adlister</h1>
            <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                <!-- <div class="alert alert-danger"> -->
                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                <!-- </div> -->
                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                <!-- <div class="alert alert-success"> -->
                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                <!-- </div> -->
                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
            <?php endif; ?>


        <div class="col-md-6 col-md-offset-3">
            <p>Login with your email/userame and password</p>
    <!-- input correct site once logged in -->
                <form method="POST">
                    <div class="container">
                        <div class="row">           
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Email/Username" id="email" name="email" type="text" class="validate" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Password" id="password" name="password" type="password" class="validate" required>
                                    </div>
                                </div>
                                <div class="center-align">
                

                                  <button class="btn waves-effect waves-light" type="submit" >
                                      Submit
                                  </button>
                                </div>
                    
                        </div>

                        <p>New to adlister? <a href="/users/signup"> Create account</a></p>
                        
                    </div>
                </form>
            </div>
        </div>
  </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</div>

