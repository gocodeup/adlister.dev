
<?php
session_start();
// require_once __DIR__ . '/../bootstrap.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ad Lister</title>
    <!-- <php require '../views/partials/head.php'; ?> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>        
</head>
<body>
    <!-- <php require '../../views/partials/navbar.php'; ?> -->

<div class="section">
    <a class="title" href="">USER ACCOUNT</a>
    <div class="row isotope">
        <div class="col s12 m12 l4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="">
                        <img    height="180" src="img/user.jpg" class="wp-post-image" alt="ITEM_1" title="item_1" /> 
                    </a>
                </div>
                <div class="card-content">
                    <a href=""><span class="card-title activator brown-text text-darken-4">USERNAME</span></a>
                    <p class="area"><a href="">Location: SAN ANTONIO, TX</a></p>
                </div>
            </div>
        </div>
    </div>

<a class="waves-effect waves-light btn">Edit</a>
<div width="20%">
  <ul class="collection">
    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
</div>
</div>
    <!-- <php require $main_view; ?> -->

     <!-- <php require '../views/partials/common_js.php'; ?> -->
     <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

</script>
 </body>
</html>