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
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Categories<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li><a href="" >Tech</a></li>
            <li><a href="" >Ent</a></li>
          </ul>
        </li>
        <?php if (isset($_SESSION['LOGGED_IN_USER'])) { ?>
		    <li><a id="accountButton" href="/Users" >Account</a></li>
        <?php } ?>
        <?php if (isset($_SESSION['LOGGED_IN_USER'])) { ?>
        <li><a href="/Ads"  >Your Ads</a></li>
        <?php } ?>
        <?php if (isset($_SESSION['LOGGED_IN_USER'])) { ?>
        <li><a href="/Ads/Create"  >Post Ad</a></li>
        <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/Users/Signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="/Users/Login"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
        <?php if (isset($_SESSION['LOGGED_IN_USER'])) { ?>
        <li id="logoutLi"><form class="navbar-form"><button id="logoutButton" type="submit" name="logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</button></form></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
