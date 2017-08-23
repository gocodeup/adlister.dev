<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="nav-item <?= $homeStatus ?>">
        <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= $indexStatus ?>">
        <a class="nav-link" href="/index">ITEMS</a>
      </li>
      <?php if(!Auth::check()): ?>
        <li class="nav-item <?= $loginStatus ?>">
          <a class="nav-link" href="/login">LOGIN</a>
        </li>
        <li class="nav-item  <?= $signupStatus ?>">
          <a class="nav-link" href="/signup">SIGNUP</a>
        </li>
      <?php endif ?>
      <?php if(Auth::check()): ?>
        <li class="dropdown">
          <a href="#" id="toggle" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropDowns" href="/create">CREATE</a></li>
            <li><a class="dropDowns" href="/edit_ads">EDIT</a></li>
          </ul>
        </li>
        <li class="nav-item  <?= $accountStatus ?>">
            <a class="nav-link" href="/account">ACCOUNT<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout">LOGOUT<span class="sr-only">(current)</span></a>
        </li>
      <?php endif ?>
      </ul>
      <div id='search'>
      <form method="GET" action="/index" class="navbar-form navbar-left">
        <div class="form-group">
          <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search for old stuff"   aria-label="Search">
        
        </div>
        <button id="searchButton" class="btn btn-outline-success my-2 my-sm-0" type="submit">GO</button>
      </form>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>