<div class="background-grey">
<?php
if($loggedIn) {
    echo "Hello " . ucwords(Auth::user()->name) . "!";
} else {
    echo "Hello guest!";
}
?>
    <div id="featuredItemsBox">
        <center><h2 class="section-title">Check Out Our Featured Items</h2></center>
        <div id="w">                    
            <div class="crsl-items" data-navigation="navbtns">
            <div class="crsl-wrap">
                <div class="crsl-item">
                <div class="thumbnail">
                    <img src="img/sportingGoods.jpg" alt="Sports">
                    <span class="postdate">Feb 16, 2014</span>
                </div>
                
                <h3><a href="#">Sporting Goods</a></h3>
                
                <p>Insert Content Here</p>
                
                <p class="readmore"><a href="#">Read More &raquo;</a></p>
                </div><!-- post #1 -->
                
                <div class="crsl-item">
                <div class="thumbnail">
                    <img src="img/auto.jpg" alt="Automotive">
                    <span class="postdate">Feb 19, 2014</span>
                </div>
                
                <h3><a href="#">Automotive</a></h3>
                <p>Insert Content Here</p>
                
                <p class="readmore"><a href="#">Read More &raquo;</a></p>
                </div><!-- post #2 -->
                
                <div class="crsl-item">
                <div class="thumbnail">
                    <img src="img/outdoors.jpeg" alt="outdoors">
                    <span class="postdate">Feb 23, 2014</span>
                </div>
                
                <h3><a href="#">Hunting/Outdoors</a></h3>
                
                <p>Insert Content Here</p>
                
                <p class="readmore"><a href="#">Read More &raquo;</a></p>
                </div><!-- post #3 -->
                
                <div class="crsl-item">
                <div class="thumbnail">
                    <img src="img/electronics.jpg" alt="apple ipod classic photo">
                    <span class="postdate">Mar 02, 2014</span>
                </div>
                
                <h3><a href="#">Electronics</a></h3>
                
                <p>Insert Content Here</p>
                
                <p class="readmore"><a href="#">Read More &raquo;</a></p>
                </div><!-- post #4 -->
                
                <div class="crsl-item">
                <div class="thumbnail">
                    <img src="img/thumb05.jpg" alt="web design magazines">
                    <span class="postdate">Mar 11, 2014</span>
                </div>
                
                <h3><a href="#">The 10 Best Web Design Magazines</a></h3>
                
                <p>Insert Content Here</p>
                
                <p class="readmore"><a href="#">Read More &raquo;</a></p>
                </div><!-- post #5 -->
            </div><!-- @end .crsl-wrap -->
            </div><!-- @end .crsl-items -->
            <nav class="slidernav">
            <div id="navbtns" class="clearfix">
                <a href="#" class="previous">prev</a>
                <a href="#" class="next">next</a>
            </div>
            </nav>
        </div><!-- @end #w -->
    </div>

    <hr class="style13">
    </div>
    <div class="recentlyAdded">
        <h1 class="section-title latestPosts">Latest Posts</h1>
        
        <div class="recentlyAddedCategories">
            <div id="postContainer">
            <?php foreach ($posts as $post): ?>
                    
                <!-- <div class="postThumbnail">IMG</div> -->
                <div class="postTitle"><?php echo $post['product_name']; ?></div>
                <div class="postCategory"><?php echo $post['category']; ?></div>
                <div class="postPrice"><?php echo $post['price']; ?></div>
                <div class="postDescription"><?php echo $post['description']; ?></div>
                <!-- <div class="usersRating">Sellers Rating</div> -->
                
            <?php endforeach ?>

            </div>
        </div>
    </div>
    

    <div class="adsContainer">
        <div id="ads1"></div>
        <div id="ads2"></div>
    </div>
    

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

    <section class="footer">
        <div class="contactContainer">
            <div id="email"></div>
            <div id="phone"></div>
            <div id="location"></div>
        </div>
    </section>