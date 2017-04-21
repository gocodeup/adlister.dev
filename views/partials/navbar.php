<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">OooLister</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/ads">Ads <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/account">View Account</a></li>
            <li><a href="/ads/create">Create Ad</a></li>
            <li class="divider"></li>
            <li><a href="/signup">Sign Up</a></li>
            <li class="divider"></li>
            <li><a href="/ads?id={n}">Posted Ads</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
            
            <?php if(Auth::check()): ?>
                <a href="/logout">Logout</a>
            <?php endif; ?>

            <?php if(!Auth::check()): ?>
                <a href="/login">Login</a>
            <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>