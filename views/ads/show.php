<!--Page for single advertisement -->

<div class="section">
    <div class="row isotope">
        <div class="col s12 m12 l4">
        <!-- card block to display image of item for sale -->
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img width="75" height="75" src="img/noImage.png" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 150px) 100vw, 100px"> 
                </div>
            </div>
        </div>
        <div class="col s8">
            <p>ITEM <?= "\$ID"; ?></p>
            <p><span class="card-title activator brown-text text-darken-4">Full Item description goes here: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </span></p>
        </div>
        <div class ="col s8">
            <a href="../users/account.php">User Profile </a>
            <p> Price: $58.99 </p>
            <p> Email: user@usermail.com </p>
            <p> Phone: (210) 999-9999 </p>
<!-- Display only if user is logged in, otherwise hide -->
            <a class="waves-effect waves-light green btn" href="edit.php">Edit</a>

<!-- Will eventually reference delete method from Model.php -->
            <a class="waves-effect waves-light red darken-4 btn">Delete</a>
        </div>
    </div>

</div>