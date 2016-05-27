<!--Page for single advertisement -->

<div class="section">
    <div class="row isotope">
        <div class="col s12 m12 l4">
        <!-- card block to display image of item for sale -->
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img width="305" height="229" src="<?= $ad['img_url'];?>" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/>
                </div>
            </div>
        </div>
        <div class="col s8">
            <p>ITEM <?= "\$ID"; ?></p>
            <p><span class="card-title activator brown-text text-darken-4"></span></p>
        </div>
        <div class ="col s8">
            <p> User: <a href="../users/account.php"> <?= $users['username']; ?> </a> </p>
            <p> Price: <?=$ads['price']; ?> </p>
            <p> Email: <?= $ads['email']; ?> </p>
            <p> Phone: <?= $ads['phone']; ?> </p>
<!-- Display only if user is logged in, otherwise hide -->
            <a class="waves-effect waves-light green btn" href="edit.php">Edit</a>

<!-- Will eventually reference delete method from Model.php -->
            <a class="waves-effect waves-light red darken-4 btn">Delete</a>
        </div>
    </div>

</div>