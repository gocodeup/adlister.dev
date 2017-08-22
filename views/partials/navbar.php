<nav class="navbar navbar-inverse navbar-fix-top">
<!--   <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto" id='links'>
      <li class="nav-item <?= $homeStatus ?>">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= $indexStatus ?>">
        <a class="nav-link" href="/index">Items</a>
      </li>
      <?php if(!Auth::check()): ?>
        <li class="nav-item <?= $loginStatus ?>">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item  <?= $signupStatus ?>">
          <a class="nav-link" href="/signup">Signup</a>
        </li>
      <?php endif ?>
      <?php if(Auth::check()): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ads <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/create">Create</a></li>
            <li><a href="/edit_ads">Edit</a></li>
          </ul>
        </li>
        <li class="nav-item  <?= $accountStatus ?>">
            <a class="nav-link" href="/account">Account<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout">Logout<span class="sr-only">(current)</span></a>
        </li>
      <?php endif ?>
    </ul>
    <div id='search'>
      <form method="GET" action="/index" id="search" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search"   aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>

  </div>
</nav>