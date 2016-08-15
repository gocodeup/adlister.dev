<!--partial view for navbar-->
<nav class="navbar navbar-dark bg-inverse">
  <a class="navbar-brand" href="/">Gavlister</a>
  <ul class="nav navbar-nav">
    <?php if (Auth::check()): ?>
        <li><a href="/ads">Gavlistings</a></li>
        <li><a href="/account/?id=<?= Auth::id(); ?>">My Gavlister Account</a></li>
        <li><a href="/account/edit/?id=<?= Auth::id(); ?>">Edit Account</a></li>
        <li><a href="/ads/create">Create New Gavlisting</a></li>
        <li><a href="/ads/edit">Edit My Gavlistings</a></li>
        <a class="nav-link" href="/account/login">Logout</a>
    <?php else: ?>   
      <li><a href="/ads">Gavlistings</a></li>
      <li><a href="/account/login">Login</a></li>
      <li><a href="/account/signup">Signup for Gavlister</a></li>
    <?php endif; ?>

  <form class="form-inline pull-xs-right">
    <input class="form-control" type="text" placeholder="Search">
    <button class="btn btn-outline-danger" type="submit">Search</button>
  </form>
</nav>