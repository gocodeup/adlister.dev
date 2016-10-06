<div class="logInContainer">
    <button class="logInExit">X</button>
    <div class="logInParent">
        <div class="logInToggle">
            <button class="logInShow">Log In</button>
            <button class="signUpShow">Sign Up</button>
        </div>
        
        <div class="logIn">
            <form method="POST" id="logIn">
                <p id="errorMessageLogIn" hidden>
                    Username/Email combination or password do not match.
                </p>
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