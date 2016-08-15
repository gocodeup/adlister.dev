<!--partial view for navbar-->
<nav class="navbar navbar-dark bg-inverse">
  <a class="navbar-brand" href="/">Gavlister</a>
  <ul class="nav navbar-nav">
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/account/?id=<?= Auth::id(); ?>">My Gavlister Account</a></li>
            <li><a href="/account/edit/?id=<?= Auth::id(); ?>">Edit Account</a></li>
            <li><a href="/account/login">Login</a></li>
            <!-- <li role="separator" class="divider"></li> -->
            <li><a href="/account/signup">Signup for Gavlister</a></li>
          </ul>
        </li>
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gavlistings<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/ads/create">Create New Gavlisting</a></li>
            <li><a href="/ads/edit">Edit My Gavlistings</a></li>
            <li><a href="/ads">Gavlistings</a></li>
            <!-- <li role="separator" class="divider"></li> -->
            <li><a href="/ads/show">This Gavlisting</a></li>
          </ul>
        </li>
        <button class = "btn btn-primary"><a href="/logout">Logout</a></button>
    <li class="nav-item">
      <a class="nav-link" href="#">Pricing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
  </ul>
  <form class="form-inline pull-xs-right">
    <input class="form-control" type="text" placeholder="Search">
    <button class="btn btn-outline-danger" type="submit">Search</button>
  </form>
</nav>