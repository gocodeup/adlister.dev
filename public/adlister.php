<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adlister</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/animate.css" rel="stylesheet">
        <link href="/css/adlister-new.css" rel="stylesheet">

    </head>
    <body>
        <div class="nbar">
            <button class="nav showLogIn">Log In</button>
        </div>
        <div class="main">
            <div class="container front">
                <div class="banner">
                    <img src="/img/placeholder.png" class="bannerImg">
                </div>
            </div>

            <div class="container-fluid body">
                <table>
                    <tr>
                        <td><img src="/img/placeholder-small.png" class="itemsImg"></td>
                        <td><img src="/img/placeholder-small.png" class="itemsImg"></td>
                        <td><img src="/img/placeholder-small.png" class="itemsImg"></td>
                    </tr>
                    <tr>
                        <td><img src="/img/placeholder-small.png" class="itemsImg"></td>
                        <td><img src="/img/placeholder-small.png" class="itemsImg"></td>
                        <td><img src="/img/placeholder-small.png" class="itemsImg"></td>
                    </tr>    
                </table>
            </div>
        </div>

        <div class="logInContainer">
            <button class="logInExit">X</button>
            <div class="logInParent">
                <div class="logInToggle">
                    <button class="logInShow">Log In</button>
                    <button class="signUpShow">Sign Up</button>
                </div>
                <div class="logIn">
                    <form method="POST">
                        <input type:="text" name="email" placeholder="Email" class="inputs">
                        <input type:="password" name="password" placeholder="Password" class="inputs">
                        <button type="submit" class="logInBtn">Log in</button>
                    </form>
                </div>
                <div class="signUp">
                    <form method="POST">
                        <input type:="text" name="username" placeholder="Your Name" class="inputs">
                        <input type:="text" name="email" placeholder="Email" class="inputs">
                        <input type:="password" name="password" placeholder="Password" class="inputs">
                        <input type:="password" name="conPassword" placeholder="Confirm Password" class="inputs">
                        <button type="submit" class="logInBtn">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>

        <button class='test in'>in</button>
        <button class='test out'>out</button>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script>
            function animationInClick(clicker, element, animation){
                clicker = $(clicker)
                element = $(element);
                clicker.click(
                    function() {
                        element.addClass('animated ' + animation);        
                        element.css('opacity', '1');
                        window.setTimeout(function(){
                            element.removeClass('animated ' + animation);
                        }, 1400);         
                    });
            }

            function animationOutClick(clicker, element, animation){
                clicker = $(clicker)
                element = $(element);
                clicker.click(
                    function() {
                        element.addClass('animated ' + animation);        
                        window.setTimeout(function(){
                            element.css('opacity', '0');
                            // element.css('display', 'none');
                            element.removeClass('animated ' + animation);
                        }, 1400);         
                    });
            }

            $('.showLogIn').click(function() {
                $('.logInParent').css('display', 'block');
                $('.logInParent').animate({
                    opacity: '1',
                    width: '300px'
                }, 600);
                setTimeout(function() {
                    $('.logInExit').animate({
                        opacity: '1'
                    }, 400);  
                }, 600);
            });

            $('.logInExit').click(function() {
                $('.logInParent').animate({
                    opacity: '0',
                    width: '200px'
                }, 600);
                $('.logInExit').animate({
                    opacity: '0'
                }, 300);
                setTimeout(function() {
                    $('.logInParent').css('display', 'none');
                }, 600);
            });

            animationInClick('.in', '.main', 'flipInX');
            animationOutClick('.out', '.main', 'flipOutX');

            animationInClick('.signUpShow', '.signUp', 'flipInX');
            animationOutClick('.signUpShow', '.logIn', 'flipOutX');
            animationInClick('.logInShow', '.logIn', 'flipInX');
            animationOutClick('.logInShow', '.SignUp', 'flipOutX');

        </script>

    </body>
</html>