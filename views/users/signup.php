<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../database/db_connect.php';
require_once __DIR__ . '/../../bootstrap.php';

// var_dump($_SESSION);
    if(Input::has('name')){
        
        $user = new User();
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->username = Input::get('username');
        $user->password = Input::get('password');
        $user->confirm = Input::get('confirm');

        $user->save();
        header('Location: /users/account');

    }
        $_SESSION["signedUp"] = true; //TODO add this inside the if above after the $user->save


?><!-- END OF PHP -->

<!-- START OF HTML -->
<?php if(isset($errors)): ?>
    <?php foreach($errors as $message):?>
        <p id="errorMessage"><?= $message ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<div class="container">
    <div class="row">
​
        <div class="col-md-4 col-md-offset-1 boxpic">
            <img src="/img/boxofpoo.png">
            <div class="gearcontent"> 
                <p class="gear-line-one">Thanks for stopping by!</p> 
                <p class="gear-line-two">We hope to see you again soon.</p>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <p class="sign-up-text">SIGN UP</p>
            <p class="sign-up-free"> It's always free and always will be.</p>
​
            <div class="formdiv">
                <form class="form" method="POST" action="#">
                    <div class="row">
                        <div class="col-xs-12 name">
                            <input name="name" type="text" placeholder="Name" class="form-control input-lg" id="name">
                        </div>
                        <div class="col-xs-12 username">
                            <input name="username" type="text" placeholder="Username" class="form-control input-lg" id="username">
                        </div>
                        <div class="col-xs-12 email">
                            <input name="email" type="text" placeholder="Email" class="form-control input-lg" id="email">
                        </div>
                        <div class="col-xs-12 password">
                            <input name="password" type="password" placeholder="Password" class="form-control input-lg" id="password">
                        </div>
                        <div class="col-xs-12 password">
                            <input name="confirm" type="password" placeholder="Confirm Password" class="form-control input-lg" id="confirm">
                        </div>
                    </div>
                    <div class="centerdiv">
                        <input class="btn btn-danger btn-lg sign-up-btn" type="submit" id="submit" value="SIGN UP!">
                    </div>
                </form>
            </div>
        </div><!-- end col-md-4 col-md-offset-2 class -->
    </div> <!-- end row class -->
</div>
