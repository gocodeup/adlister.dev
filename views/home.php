<?php


?>

<body>
        <?php if(isset($_SESSION['LOGGED_IN_ID'])) {
            echo "Hello " . ucwords(Auth::user()->name);
        } else {
            echo "Hello guest!";
        }
        ?>
        <div id="featuredItemsContainer">
            <center><h2 class="section-title">Check Out Our Featured Items</h2></center>
            <div class="featuredItemsInnerContainer">
                <div class="featuredItems"></div>
                <div class="featuredItems"></div>
                <div class="featuredItems"></div>
                <div class="featuredItems"></div>
            </div>
        </div>

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

        <section id="features">

            <div class="row">

                <!-- Placeholder for featured items.-->
            </div>

        </section>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


   </body>