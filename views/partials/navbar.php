	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/" >Inventor Center</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li class="nav"><a href="/AllAds">Items</a></li>
        <?php if (Auth::check()) { ?>
		    <li><a id="accountButton" href="/Users">Account</a></li>
        <?php } ?>
        <?php if (Auth::check()) { ?>
        <li><a href="/Ads"  >Your Ads</a></li>
        <?php } ?>
        <?php if (Auth::check()) { ?>
        <li><a href="/Ads/Create"  >Post Ad</a></li>
        <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if (!Auth::check()) { ?>
        <li><a href="/Users/Signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <?php } ?>
        <?php if (!Auth::check()) { ?>
        <li><a href="/Users/Login"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
        <?php } ?>
        <?php if (Auth::check()) { ?>
        <li id="logoutLi"><form class="navbar-form"><button id="logoutButton" type="submit" name="logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</button></form></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
