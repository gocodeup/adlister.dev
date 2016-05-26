<html>
<head>
  <title>Adlister | Edit</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<style type="text/css">
    .container {
        background-color: #eeeeee;
        margin-top: 40px;
        padding: 20px;
    }

</style>
</head>
<body>
    <?php require 'temp-navbar.php'; ?>

    <div class="container">
        <div class="row title center-align">
            <h1>Edit Your Adlist</h1>
        </div>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                          <input placeholder="Awesome" id="name" type="text" class="validate">
                          <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12">
                          <input id="price" type="text" class="validate">
                          <label for="price">Price</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                              <textarea id="description" class="materialize-textarea"></textarea>
                              <label for="description">Description</label>
                        </div>
                    </div>
                </div>
                    <button class="center-btn btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right"></i>
                    </button>
            </form>
        </div>
    </div>
    <?php require 'temp-foot.php'; ?>
</body>
</html>
