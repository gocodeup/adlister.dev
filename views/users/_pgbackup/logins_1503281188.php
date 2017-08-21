<!DOCTYPE html>
<html>
    <title>Adlister</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Josefin+Sans" rel="stylesheet">
    <!-- font-family: 'Amatic SC', cursive;
        font-family: 'Josefin Sans', sans-serif; -->
    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS Sheet -->
    <link rel="stylesheet" href="login.css">
    <body>
        <!-- /////////////////////////////////
             Navigation Bar
    ///////////////////////////////// -->
        <div id='navContainer'>
            <nav>
                <ul class="desktop-menu" id="desktopMenu">
                    <li>
                        <a id="home" href="#">
                            <img src="broccolilogo.png" class="yonsei-logo">VEGGIE CONNECT
                        </a>
                    </li>
                    <li class="desktop-link">
                        <a href="#">HOME</a>
                        <li class="desktop-link">
                            <a href="#">VEGGIES FOR SALE</a>
                        </li>
                        <li class="desktop-link">
                            <a href="#">SIGN-UP</a>
                        </li>
                        <li class="desktop-link">
                            <a href="#">LOGIN</a>
                        </li>
                        <li id="mobile-menu">
                            <a id="home2" href="index.html">
                                <img src="broccolilogo.png" class="yonsei-logo">
                            </a>
                        </a>
                        <a id="mobile-icon-container" href="#" onclick="responsiveMenu(); return false;">
                            <img id="mobile-icon" src="https://eliya33.github.io/church/images/mobile-menu-icon-125x125.png" alt="Mobile Menu Icon">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--     /////////////////////////////////
                   Login Form
        ///////////////////////////////// -->
        <div class="container">
            <section id="login">
                <div class="row" style="padding-top: 100px">
                    <h1 class="section-title">Login To Veggie Connect</h1>
                    <!-- <div id="veggieLogo"><img src="broccolilogo.png" class="yonsei-logo"></div> -->
                    <!-- <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
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
                    <?php endif; ?> -->
                    <div class="col-md-6 col-md-offset-3">
                        <p id="login">Login with your email/username and password.</p>
                        <form method="POST" action="" data-validation data-required-message="This field is required">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_user" name="email_user" placeholder="Email or Username" data-required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="/signup" class="btn btn-success">Go To Signup</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
