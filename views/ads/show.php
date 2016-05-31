<!--Page for single advertisement -->
<?php if(!isset($_SESSION['LOGGED_IN_ID'])){
            $_SESSION['LOGGED_IN_ID'] = 0;
        } ?>


<div class="section">
    <div class="row isotope">
    <?php foreach($ads as $ad) {

        if ($ad['id'] == $_GET['id']){  ?>

        <div class="col s12 m12 l4">
        <!-- card block to display image of item for sale -->
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img width="305" height="229" src="<?= $ad['img_url'];?>" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/>
                </div>
            </div>
        </div>
        <div class="col s8">
            <p><strong><?=$ad['ad_name']; ?></strong></p>
            <p><span class="card-title activator brown-text text-darken-4"></span></p>
        </div>
        <div class ="col s8">

            <p> Price: <?=$ad['price']; ?> </p>
            <p> Description:<?= $ad['ad_description'] ?>  </p>
            <p> User: <?php foreach($users as $user){
                if ($ad['user_id'] == $user['id']){ ?>
                <?= $user['username']; ?> </p>
                <?php } } ?>
            <p> Email: <?= $ad['email']; ?> </p>
            <p> Phone: <?= $ad['phone']; ?> </p>
            <p> Location: <?= $ad['location']; ?> </p>

<!-- Display only if user is logged in, otherwise hide -->
            <p> <?php if(!isset($_SESSION['LOGGED_IN_ID'])){
                    $_SESSION['LOGGED_IN_ID'] = 0;
                } ?>
            <p> <?php foreach($users as $user){
                if($ad['user_id'] == $_SESSION['LOGGED_IN_ID']){ ?> </p>
            <p> 
                <?php if($ad['user_id'] == $_SESSION['LOGGED_IN_ID']){ ?> </p>
            <p><?php if($ad['user_id'] == $_SESSION['LOGGED_IN_ID']){ ?> </p>
                <a class="waves-effect waves-light green btn" href="edit?id=<?=$ad['id']?>">Edit</a>
            <p> <?php } ?> </p>

            <p><?php if($ad['user_id'] == $_SESSION['LOGGED_IN_ID']){ ?> </p>
                    <a class="waves-effect waves-light red darken-4 btn" href="delete?id=<?=$ad['id']?>" >Delete</a>
             <p> <?php } ?> </p>

        </div>
    <?php }} ?> 
    </div>

</div>