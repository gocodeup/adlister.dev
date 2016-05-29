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
        <div class="col-sm-4 col-sm-offset-3 text-center">
            <h2>User Info</h2>
                
            <p>Name: <?php echo $user->name; ?></p>

            <p>Username: <?php echo $user->username; ?></p>
        
            <p>Email: <?php echo $user->email; ?></p>

            <p>Location: <?php echo $user->location; ?></p>

            <a href='account/edit' class="btn btn-default" type="submit">Edit Profile</a>
        </div>
    </div>

    <div>
        <h2 class="text-left">Your Ads</h2>

        <div class="row">
            <div class="col-sm-4 col-sm-offset-3">
                <?php foreach ($userAds as  $ad):  ?>
                    <div class="small-thumb thumbnail col-sm-3">
                        <img class="img-rounded" src="<?= $ad['image_url']; ?>">
                        <div class="caption">
                            <h3><?= $ad['title'] ?></h3>
                            <p>$<?= $ad['price']; ?></p>
                            <p><?= $ad['description']; ?></p>
                        </div>
            
                        <div class="row">
                            <div class="col-sm-4">
                                <h4><a class="btn btn-default" href="/ads/show?id=<?=$ad['id'] ?>">View Ad</a></h4>
                            </div>
                            <div class="col-sm-4">
                                <h4><a class="btn btn-default" href="/ads/edit?id=<?=$ad['id'] ?>">Edit Ad</a></h4>
                            </div>
                            <div class="col-sm-4">
                                <h4><a class="btn btn-default" href="/ads/delete?id=<?=$ad['id'] ?>">Delete Ad</a></h4>
                            </div>   
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="row text-center">
            <a href='/ads/create' class="btn btn-default" type="submit">Create New Ad</a>
        </div>  
    </div>
</div>