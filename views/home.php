<body>
        <div class="background-grey">
        <?php
        if($loggedIn) {
            echo "Hello " . ucwords(Auth::user()->name) . "!";
        }
        ?>
            <div id="featuredItemsBox">
                <center><h2 class="section-title">Check Out Our Featured Items</h2></center>
                <div id="w">                    
                    <div class="crsl-items" data-navigation="navbtns">
                    <div class="crsl-wrap">
                        <div class="crsl-item">
                        <div class="thumbnail">
                            <img src="img/thumb01.jpg" alt="nyc subway">
                            <span class="postdate">Feb 16, 2014</span>
                        </div>
                        
                        <h3><a href="#">Lorem Ipsum Dolor Sit</a></h3>
                        
                        <p>Suspendisse laoreet eu tortor vel dapibus. Etiam auctor nisl mattis, ornare nibh eu, lobortis leo. Sed congue mi eget velit dictum, id dictum massa tempus. Cras lobortis lectus neque. Fusce aliquet mauris ac bibendum pharetra.</p>
                        
                        <p class="readmore"><a href="#">Read More &raquo;</a></p>
                        </div><!-- post #1 -->
                        
                        <div class="crsl-item">
                        <div class="thumbnail">
                            <img src="img/thumb02.jpg" alt="danny antonucci">
                            <span class="postdate">Feb 19, 2014</span>
                        </div>
                        
                        <h3><a href="#">A Look Back over A.K.A Cartoon</a></h3>
                        
                        <p>Vestibulum in venenatis velit. Praesent commodo eget purus sed interdum. Curabitur faucibus purus ut erat fermentum posuere. Suspendisse blandit viverra sagittis. Nullam cursus scelerisque lorem ut ornare.</p>
                        
                        <p class="readmore"><a href="#">Read More &raquo;</a></p>
                        </div><!-- post #2 -->
                        
                        <div class="crsl-item">
                        <div class="thumbnail">
                            <img src="img/thumb03.jpg" alt="watercolor paints">
                            <span class="postdate">Feb 23, 2014</span>
                        </div>
                        
                        <h3><a href="#">Watercoloring for Beginners</a></h3>
                        
                        <p>Cras eget interdum nunc. Nam suscipit congue augue, id interdum risus adipiscing nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla non diam id nisi tempus sodales.</p>
                        
                        <p class="readmore"><a href="#">Read More &raquo;</a></p>
                        </div><!-- post #3 -->
                        
                        <div class="crsl-item">
                        <div class="thumbnail">
                            <img src="img/thumb04.jpg" alt="apple ipod classic photo">
                            <span class="postdate">Mar 02, 2014</span>
                        </div>
                        
                        <h3><a href="#">Classic iPods are Back!</a></h3>
                        
                        <p>Phasellus condimentum enim nisl, volutpat dapibus turpis euismod nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec id elit lorem. Vivamus at eros elit. Nullam cursus euismod purus.</p>
                        
                        <p class="readmore"><a href="#">Read More &raquo;</a></p>
                        </div><!-- post #4 -->
                        
                        <div class="crsl-item">
                        <div class="thumbnail">
                            <img src="img/thumb05.jpg" alt="web design magazines">
                            <span class="postdate">Mar 11, 2014</span>
                        </div>
                        
                        <h3><a href="#">The 10 Best Web Design Magazines</a></h3>
                        
                        <p>Morbi quis tempus leo, eget vestibulum quam. Pellentesque ac orci urna. Proin vitae neque vel metus pulvinar luctus vitae eu nulla.</p>
                        
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
            
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories"></div>
            <div class="recentlyAddedCategories AddedCatErrorFix"></div>
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
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/responsiveCarousel.min.js"></script>
    <script type="text/javascript">
    $(function(){
    $('.crsl-items').carousel({
        visible: 4,
        itemMinWidth: 230,
        itemEqualHeight: 200,
        itemMargin: 9,
    });
    
    $("a[href=#]").on('click', function(e) {
        e.preventDefault();
    });
    });
    </script>
   </body>