<div class="container">

    <?php $ads = Ad::findAdsByUser(); ?>
    <section id="accountinfo">

        <div class="row">

            <h1 class="section-title">Your Account</h1>

            <div class="col-xs-6 col-xs-offset-3">
            	<h3>Name: <?php echo $user->name; ?></h3>
            	<h3>Email: <?php echo $user->email; ?></h3>
            	<h3>Username: <?php echo $user->username; ?></h3>

                <a href="/update">Edit</a>
                <a href="/password">Change password</a>
            </div>


        </div>
        <br>
        <h1>Your ads</h1>
        <div class="row">
            <?php if (! empty($ads)) { ?>
                <?php foreach($ads as $ad): ?>
                    <!-- <a href="/edit_ads?ad=<?php //echo($ad->id) ?>"> -->
                    <div class="well text-center col-md-4">
                        <h4><?= $ad->name ?></h4>
                        <p>Description: <?= $ad->description ?></p>
                        <img class="ad-img" src=<?= $ad->image ?>>
                        <a href="/edit_ads?ad=<?=$ad->id?>">Edit</a>
                    </div>
                    <!-- </a> -->
                <?php endforeach; } else { ?>
                    <?php echo "You have no ads. <a href='/create'> Sell your old things.</a>"; } ?>
        </div>

    </section>

</div>
