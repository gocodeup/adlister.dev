<?php foreach ($users as $user) {
    if ($user['id'] == $_GET['id']){ ?>

    
<div class="row">
    <a class="title" href="">USER ACCOUNT</a>
    <div class="row isotope">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="">
                        <img    height="180" src="img/user.jpg" class="wp-post-image" alt="ITEM_1" title="item_1" /> 
                    </a>
                </div>
                <div class="card-content">
                    <a href=""><span class="card-title activator brown-text text-darken-4"><?= $user['name']?></span></a>
                    <p class="area"><a href="">Location: SAN ANTONIO, TX</a></p>
                </div>
            </div>
        </div>
    <div width="20%">
        <ul class="collection">
            <li class="collection-item avatar">
                <img src="images/yuna.jpg" alt="" class="circle">
                <span class="title">ACCOUNT INFORMATION</span>
                    <p>First Line <br>
                      Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
            <i class="material-icons circle">folder</i>
            <span class="title">CHANGE PASSWORD</span>
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
    <a class="waves-effect waves-light btn">Change Profile Picture</a>
    </div>
  </div><!--Page for user account home-->
  <?php }} ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>


