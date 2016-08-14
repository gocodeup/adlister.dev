<!--partial view for navbar-->

<style>

h1 {
  color: #800020;
}

body {
  border: 20px;
}

</style>

<body>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <div class="row">
        <div class="col-xs-1">
          <img src="volcanion.png" class="img-responsive">
        </div>  
        <div class="col-xs-3">
          <h1><strong>POKEDOPTION</strong></h1>
        </div>
        <div class="col-xs-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Create A New Team</a></li>
            <li><a href="#">Adopt A Pokemon</a></li>
          </ul>
        </div>
        <div class="col-xs-5">  
          <form class="navbar-form navbar" role="signup">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email">
              <input type="text" class="form-control" placeholder="Password">
            <button type="submit" class="btn btn-default">Sign Up</button>
            </div>
          </form>
          <!-- <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
          </ul> -->
        </div>  
    </div>
  </div>
</nav>
</body>
