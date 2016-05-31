<?php
var_dump($_SESSION);
?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../img/poo_sale1.png" alt="SellYourCrapOrnament">
      </div>

      <div class="item">
        <img src="../img/poo_sale5.png" alt="SellYourCrapGift">
      </div>

      <div class="item">
        <img src="../img/poo_sale2.png" alt="SellYourCrapCellPhone">
      </div>
    </div>
  </div>
<div class="container" id="container">

    <section id="welcome" class="home-row-picture">

        <div class="row">

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h1 class="section-title">Our Featured Items</h1>
            <!-- Placeholder for featured items.-->
              <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="thumbnail-projects">
                        <a href="#"><img class="img-responsive img-rounded" src="img/elmobook.png"></a>
                        <div class="caption">
                            <h3>Childrens Book</h3> 
                            <p>Let us follow our beloved Elmo into this self discovery adventure. <br> $3.50</p>
                            <p><a href="#" class="btn btn-primary" role="button">view</a></p>
                        </div><!-- caption end -->
                    </div><!-- thumbnail end -->
                </div><!-- col end -->
                <div class="col-xs-12 col-md-4">
                    <div class="thumbnail-projects">
                        <a href="#"><img class="img-responsive img-rounded" src="img/decobcorn.png"></a>
                        <div class="caption">
                            <h3>The D'cober</h3> 
                            <p>D'cob just about any ear of corn that fits into this thing! <br> make offer</p>
                            <p><a href="#" class="btn btn-primary" role="button">view</a></p>
                        </div><!-- caption end -->
                    </div><!-- thumbnail end -->
                </div><!-- col end -->
                <div class="col-xs-12 col-md-4">
                    <div class="thumbnail-projects">
                        <a href="#"><img class="img-responsive img-rounded" src="img/sofaset.jpg"></a>
                        <div class="caption">
                            <h3>Sofa Set</h3> 
                            <p>Has the perfect amount of cushion in the right spots. <br> asking $250.00</p>
                            <p><a href="#" class="btn btn-primary" role="button">view</a></p>
                        </div><!-- caption end -->
                    </div><!-- thumbnail end -->
                </div><!-- col end -->
              </div><!-- row end -->
        </div>

    </section>

      
</div>
<script>
    $(function(){
        $('.carousel').carousel({
          interval: 3000
        });
    });
</script>