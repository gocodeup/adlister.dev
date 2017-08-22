<nav class="navbar navbar-inverse">
<!--   <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index">Items</a>
      </li>
      <?php if(!Auth::check()): ?>
        <li class="nav-item">
          <a class="nav-link disabled" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="/signup">Signup</a>
        </li>
      <?php endif ?>
      <?php if(Auth::check()): ?>
          <li class="nav-item active">
             <a class="nav-link" href="/account">Account<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
             <a class="nav-link" href="/logout">Logout<span class="sr-only">(current)</span></a>
          </li>
      <?php endif ?>
    </ul>

    <form method="GET" action="/index" id="search" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>
</nav>