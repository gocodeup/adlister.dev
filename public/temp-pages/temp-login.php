<html>
<head>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

    <title>Login Page</title>
</head>
<body>
<h5>Creating A New User</h5>    
<div class="row">
    <div class="col s12 m6 l4 offset-m3 offset-l4">
        <form class="col s12">
          <div class="row">
            <div class="input-field">
              <input placeholder="First Name" id="first_name" type="text" class="validate">
            </div>
          </div>  
          <div class="row">  
            <div class="input-field">
              <input placeholder="Last Name" id="last_name" type="text" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <input placeholder="Password" id="password" type="password" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <input placeholder="Confirm Password" id="confirmPassword" type="password" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <input placeholder="Email" id="email" type="email" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="col l4 offset-l4">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
            </div>
          </div>
        </form>
    </div>
</div>

</body>
</html>