<!--partial view for navbar-->


<link rel="stylesheet" href="/css/main.css">
<body>

<nav class="navbar">
  <div class="container-fluid">
    <div class="row">
        <div class="col-xs-1">
          <img src="volcanion.png" class="img-responsive" id="nav-logo">
        </div>  
        <div class="col-xs-3">
          <p class="nav-title"><a href="/">PokéDoption</a></p>
        </div>
        <div class="col-xs-8"> 
          <div class="row"> 
          <?php if (!Auth::loggedIn()) : ?>
            <form method="POST" action="/login" class="navbar-form navbar-right" data-validation data-required-message="This field is required">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username">
                  <input type="text" class="form-control" name="password" placeholder="Password">
                <button type="submit" class="btn btn-default">Sign In</button>
          <a class="nav-link" href="/signup">Sign Up</a>
                </div>
              </form>
            <?php else: ?>
              <a class="navbar-right nav-link" href="/logout">Sign Out</a>
              <h3 class="navbar-right">Welcome <?= $_SESSION['IS_LOGGED_IN'] ?>!</h3>
          <?php endif ?>
            </div>
        </div>  
    </div>
  </div>
</nav>
</body>
