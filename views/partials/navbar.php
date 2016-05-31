
<div class="navbar">
  <nav>
    <div class="nav-wrapper">
      <!-- <a href="#!" class="brand-logo">Logo</a> -->
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/ads">Items</a></li>
        <?php if(Auth::check()) { ?>
        <li><a href="/users/account?id=<?= Auth::id()?>">Profile</a></li>
        <li><a href="/users/logout">Logout</a></li>
        <?php }else { ?>
        <li><a href="/users/login">Login</a></li>
        <li><a href="/users/signup">Sign-Up</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</div>

