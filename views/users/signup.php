<?php
// $Name = (isset($value)) ? $value = $user->name : $value = "";
// $Email = (isset($value)) ? $value = $user->email : $value = "";
// $Username = (isset($value)) ? $value = $user->username : $value = "";
// $Password = (isset($value)) ? $value = $user->password : $value = "";
?>
<div class="container">

        <section id="login">

            <div class="row">

                <h1 class="section-title"><center>Signup For OooLister</center></h1>

                <div class="col-md-6 col-md-offset-3">

                <p style="text-align: center;">Please fill out the information below so we can create your account.</p>

                <form method="POST" action="" data-validation data-required-message="This field is required">

                    <?php
                    if(isset($_POST['submit']) && !empty($_SESSION['signup_errors']['name'])) {
                        echo '<div class="alert alert-danger"><p class="error">' . $_SESSION['signup_errors']['name'] . '</p></div>';
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" value="" name="name" placeholder="Full Name" data-required>
                    </div>
                    <?php
                    if(isset($_POST['submit']) && !empty($_SESSION['signup_errors']['email'])) {
                        echo '<div class="alert alert-danger"><p class="error">' . $_SESSION['signup_errors']['email'] . '</p></div>';
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" value="" name="email" placeholder="Email" data-required>
                    </div>
                    <?php
                    if(isset($_POST['submit']) && !empty($_SESSION['signup_errors']['username'])) {
                        echo '<div class="alert alert-danger"><p class="error">' . $_SESSION['signup_errors']['username'] . '</p></div>';
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" value="" name="username" placeholder="Username" data-required>
                    </div>
                    <?php
                    if(isset($_POST['submit']) && !empty($_SESSION['signup_errors']['password'])) {
                        echo '<div class="alert alert-danger"><p class="error">' . $_SESSION['signup_errors']['password'] . '</p></div>';
                    }
                    ?>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" value="" name="password" placeholder="Password" data-required>
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
</body>
</html>