<body>
        <?php
        if($loggedIn) {
            echo "Hello " . ucwords(Auth::user()->name) . "!";
        }
        ?>
        <div id="featuredItemsBox">
            <center><h2 class="section-title">Check Out Our Featured Items</h2></center>
            <div class="featuredItemsInnerContainer">
               <!--  <div class="featuredItems"></div>
                <div class="featuredItems"></div>
                <div class="featuredItems"></div>
                <div class="featuredItems"></div> -->


            </div>
        </div>

        <hr class="style13">
        <div class="recentlyAdded">
            <h1 class="section-title latestPosts">Latest Posts</h1>
            
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories"></div>
        </div>
        <div class="adsContainer">
            <div id="ads">Insert Add Here</div>
            <div id="ads">Insert Add Here</div>
        </div>
       <!--  <hr class="style13"> -->

        <div class="emptyClass">
            <div class="emptyLayout">
               <!--  add hover feature that .fadeIn a class that has an all white box with information about creating and effective listing  -->
                <center><h4>Tips To Success</h4></center>
            </div>
            <div class="emptyLayout">
                <center><h4>What Makes Us Different?</h4></center>
            </div>
            <div class="emptyLayoutLarge">
                <!-- add in a section after each user closes out a listing with radio buttons asking if the user made the sale or not - have a "rewards Program" if the seller is the top seller for the month (I.E. Free $10 amazon gift card OR Free $10 credit towards their next purchase the site)

                Pay Pal needs to be set up in order for "SELLER OF THE MONTH" to get credited $10 towards their next purchase -->
                <center><h3>Seller Of The Month</h3></center>

            </div>

        </div>

    <section class="footer"></section>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/lightslider.js"></script>



   </body>