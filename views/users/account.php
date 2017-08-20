<?php

	
$usernameOrEmail = "finn_the_human";
$user = User::findByUsernameOrEmail($usernameOrEmail);

$name = $user->name;
$email = $user->email;
$username = $user->username;

?>

<div class="container">

    <section id="accountinfo">

        <div class="row">

            <h1 class="section-title">Your Account</h1>

            
            <div class="col-xs-6 col-xs-offset-3">

            	<h3>Name: <?php echo $name; ?></h3>
            	<h3>Email: <?php echo $email; ?></h3>
            	<h3>Username: <?php echo $username; ?></h3>

                <a href="">Edit</a>
                <a href="">Change password</a>

                

            </div>

        </div>

    </section>

</div>











