<body>
    <?php echo 'Hello '; ?>
    <?php if (isset($_SESSION['LOGGED_IN_ID'])): ?>
        <?php echo Auth::user()->name; ?>
    <?php else: ?>
        <?php echo 'guest'; ?>
    <?php endif; ?>
    <?php echo '!'; ?>
    <div id="featuredItemsContainer">
        <h2 class="section-title text-center">Check Out Our Featured Items</h2>
        <div class="featuredItemsInnerContainer">
            <div class="featuredItems"></div>
            <div class="featuredItems"></div>
            <div class="featuredItems"></div>
            <div class="featuredItems"></div>
        </div>
    </div>

    <div class="recentlyAdded">
        <h1 class="section-title latestPosts">Latest Posts</h1>
        <hr>
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

    <section id="features">

        <div class="row">

            <!-- Placeholder for featured items.-->
        </div>

    </section>

</body>