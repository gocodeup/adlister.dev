<?php
    var_dump($_SESSION['LOGGED_IN_ID']);
if(isset($_POST['img_url'])){ 
    $user = User::find($_SESSION['LOGGED_IN_ID']);
    $user->name;
    $user->username;
    $user->email;
    $user->user_img = saveUploadedImage('img_url');
    $user->save();
}
 foreach ($users as $user) {
    if ($_GET['id'] == $user['id']){ 
    

?> 
 <div class="row">
    <a class="title" href="">USER ACCOUNT</a>
    <div class="row isotope">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="">
                        <img height="180" src="/../public/img/uploads/UC.jpg" class="wp-post-image" alt="ITEM_1" title="item_1" /> 
                    </a>
                </div>
                <div class="card-content">
                    <a href=""><span class="card-title activator brown-text text-darken-4"><?= $user['name']?></span></a>
                    <p class="area"><a href=""><?= $user['email'] ?></a></p>
                </div>
            </div>
        </div>
    <div width="20%">
        <ul class="collection">
            <li class="collection-item avatar">
                <img src="images/yuna.jpg" alt="" class="circle">
                <span class="title">ACCOUNT INFORMATION</span>
                    <p>
                    <a class="waves-effect waves-light btn">Edit Profile</a>
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
            <i class="material-icons circle">folder</i>
            <span class="title">VIEW ADS</span>
                <p>First Line <br>
                  Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
            <i class="material-icons circle green">insert_chart</i>
            <span class="title">MESSAGES</span>
                <p>First Line <br>
                  Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
        </ul>
    </div>
    </div>
    <form method="POST" action="/users/account?id=<?= $_GET['id'] ?>" class="col s12" enctype="multipart/form-data">
        <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file" name="img_url">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" name="">
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit">Submit
        </button>
    </form>
  </div>
  <?php }} ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>


