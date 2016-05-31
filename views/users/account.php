<?php
if(!Auth::check()) {
    header('Location: /users/login');
    exit();
}

if(Auth::id() !== $_GET['id']){
    header('Location: /');
    exit();
}

if (isset($_POST['name_field'])){ 
    $user = User::find($_GET['id']);
    $user->user_img = saveUploadedImage('img_url');
    $user->save();
}
foreach ($users as $user) {
    if ($_GET['id'] == $user['id']){ 

?> 
<div class="row">
    <a class="title" href="">ACCOUNT INFO</a>
    <div class="row isotope">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <?php if(!($user['user_img'])){ ?>
                    <img height="180" src="<?= $user['user_img']?>" class="responsive-img wp-post-image" alt="
                    ITEM_1" title="item_1" />
                <?php }else { ?>
                    <img height="180" src="/img/uploads/user.png" class="responsive-img wp-post-image" alt="
                    ITEM_1" title="item_1" />
                <?php } ?>
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
                    <i class="material-icons circle blue">grade</i>
                    <p>
                        <a class="waves-effect waves-light btn" href="/users/edit">Edit Profile</a>
                    </p>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle blue">grade</i>
                    <p>
                        <a class="waves-effect waves-light btn" href="/ads/create">Create AD</a>
                    </p>
                </li>                
                <li class="collection-item avatar">
                    <i class="material-icons circle blue">grade</i>
                    <p>
                        <a class="waves-effect waves-light btn" href="">View Your ADS</a><br>
                        <?php foreach ($ads as $ad) { ?>
                           <?php if($_SESSION['LOGGED_IN_ID'] == $ad['user_id']){ ?>
                                <a  href="http://adlister.dev/ads/show?id=<?=$ad['id']?>">Item Name: <?= $ad['ad_name'];?></a><br>
                                <img height="60" src="<?= $ad['img_url']?>" class="col s2 responsive-img wp-post-image" alt="ITEM_1" title="item_1" /><br>
                        <?php }}?>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <ul class="collapsible col s12 m4" data-collapsible="accordion">
        <li>
            <div class="collapsible-header"><i class="material-icons">perm_identity</i>Change profile picture</div>
            <div class="collapsible-body">
                <form method="POST" action="/users/account?id=<?= $_GET['id'] ?>" class="col s12" enctype="multipart/form-data">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" name='img_url'>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="name_field">
                            <button class="btn waves-effect waves-light" type="submit">Change
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>
</div>
<?php }} ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>


