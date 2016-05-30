<?php  

require_once __DIR__ . '../../../models/Ad.php';
require_once __DIR__ . '../../../models/User.php';
require_once __DIR__ . '/../../utils/Auth.php';
    
    if (!Auth::check()) {
        header('Location: login');
        exit();
    }

    $user = User::find(Auth::id());

    $userAds = Ad::getUserAds($user->id);


?>

<div class="container"> 
    <div class="row">
        <div class="col-sm-2 col-md-2">
            <img src="/img/cornerstore.png">
        </div>
        <div class="col-sm-8 col-md-8 text-left">
            <h1 class="header-margin">Peddler's Corner</h1>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-3 ">
            <h2>User Info</h2>
                
            <p>Name: <?= $user->name; ?></p>

            <p>Username: <?= $user->username; ?></p>
        
            <p>Email: <?= $user->email; ?></p>

            <p>Location: <?= $user->location; ?></p>

            <div class="row">
                <div class="col-sm-3 col-md-3 text-left">
                    <a href='account/edit' class="btn btn-default" type="submit">Edit Profile</a>
                </div>
                <div class="col-sm-3 col-md-3 text-left">
                    <a href='/ads/create' class="btn btn-default" type="submit">Create New Ad</a>
                </div>
            </div>

        </div>
    </div>

    <div>
        <div class="row">
            <h2>Your Ads</h2>
        </div>  

        <div class="row">
                <?php foreach ($userAds as $index=>$ad):  ?>
                    <?php if($index % 4 == 0) : ?>
                        <div class="row">
                    <?php endif;  ?>
                        <div class="small-thumb thumbnail col-sm-3 text-center">
                            <img class="img-rounded" src="<?= $ad['image_url']; ?>">
                            <div class="caption">
                                <h3><?= $ad['title'] ?></h3>
                                <p>$<?= $ad['price']; ?></p>
                                <p><?= $ad['description']; ?></p>
                            </div>
                
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4><a class="btn btn-default" href="/ads/show?id=<?=$ad['id'] ?>">View</a></h4>
                                </div>
                                <div class="col-sm-3">
                                    <h4><a class="btn btn-default" href="/ads/edit?id=<?=$ad['id'] ?>">Edit</a></h4>
                                </div>
                                <div class="col-sm-3">
                                    <h4><a class="btn btn-default" href="/ads/delete?id=<?=$ad['id'] ?>">Delete</a></h4>
                                </div>   
                            </div>
                    <?php if($index % 4 == 3) : ?>
                        </div> <!-- closes row -->
                    <?php endif; ?>  
                        </div> <!-- closes thumbnail -->
                <?php endforeach; ?>
        </div>

    </div>
</div>