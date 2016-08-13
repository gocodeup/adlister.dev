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
          <ul class="nav navbar-nav">
            <li><a href="#">Create A New Team</a></li>
            <li><a href="#">Adopt A Pokemon</a></li>
          </ul>
        </div>
        <div class="col-xs-5">  
          <form class="navbar-form navbar" role="login">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Username">
              <input type="text" class="form-control" placeholder="Password">
            <button type="submit" class="btn btn-default">Login</button>
          </form>
            <button type="submit" class="btn btn-default">Join</button>
        </div>  
    </div>
  </div>
</nav>
</body>
