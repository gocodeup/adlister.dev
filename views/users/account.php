<!--Page for user account home-->
<?php  

require_once __DIR__ . '../../../models/Ad.php';
require_once __DIR__ . '../../../models/User.php';
require_once __DIR__ . '/../../utils/Auth.php';

  $user = User::find(Auth::id());



$userAds = Ad::getUserAds($user->id);

?>

<div class="container"> 
    <h1>Profile Page</h1>

    <div class="col-sm-4 col-sm-offset-3 text-center">
        <h2>User Info</h2>
            
        <p><?php echo $user->name; ?></p>

        <p><?php echo $user->username; ?></p>
    
        <p><?php echo $user->email; ?></p>

        <p><?php echo $user->location; ?></p>

        <a href='account/edit' class="btn btn-default" type="submit">Edit Profile</a>
    </div>

    <div class="col-sm-4 col-sm-offset-3">
        <h2>Your Ads</h2>
        <?php foreach ($userAds as  $ad):  ?>

        <p>
           <h3><?php echo $ad['title'] ?></h3>
           <?php echo $ad['description'] ?>
        </p>
        <h4><a href="/ads/show?id=<?=$ad['id'] ?>">View Ad</a></h4>
        <h4><a href="/ads/edit?id=<?=$ad['id'] ?>">Edit Ad</a></h4>
        <h4><a href="/ads/delete?id=<?=$ad['id'] ?>">Delete Ad</a></h4>
    <?php endforeach; ?>
        <div>

        <a href='/ads/create' class="btn btn-default" type="submit">Create Ad</a>

        </div>
    </div>

</div>