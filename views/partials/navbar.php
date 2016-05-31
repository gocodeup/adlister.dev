<!--partial view for navbar-->

    <nav class="navbar navbar-default navbar navbar-inverse">
        <?php if(isset($_SESSION['IS_LOGGED_IN'])): ?>
        <div class="form-group signinbut">
            <a href="/users/login" type="submit" class="btn btn-default navbut">Log Out</a>
        </div>
        <?php else: ?>
        <div class="form-group signinbut">
            <a href="/users/login" type="submit" class="btn btn-default navbut">Log In</a>
        </div>
        <div class="form-group signinbut">
            <a href="/signup" class="btn btn-default navbut">Sign Up!</a>
        </div>
        <?php endif; ?>

        <div class="form-group signinbut">
            <a href="/items" class="btn btn-default navbut">All Items</a>
        </div>

        <div class="logo">
            <a href="/" type="submit" class="nav-home">Sell Your Crap!</a>
        </div>
    </nav>

