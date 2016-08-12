<!--Page for an index of advertisements-->
<?php
require_once __DIR__ . "/../partials/navbar.php";



?>

<div class="container">

	<section id="welcome">

		<div class="row">

			<div class="col-xs-12">

				<h1 class="text-center">Welcome To Fadlister</h1>

			</div>

		</div>

	</section>

	<section id="features">

		<div class="row">

			<h3 class="section-title">Featured Items</h3>
			<!-- Placeholder for featured items.-->

			<div class="jumbotron">
				<div class="container" id="tourpackages-carousel">
      
      <div class="row">
        <?php foreach ($ads as $ad) { ?>
       
	        <div class="col-xs-18 col-sm-6 col-md-4">
	          <div class="thumbnail">
	            <img src=<?= "../img/{$ad->id}.jpg" ?> alt="">
	              <div class="caption">
	                <h4><?= $ad->title ?></h4>
	                <p><?= $ad->description ?></p>
	                <p><a href="#" class="btn btn-info btn-xs" role="button">See more</a></p>
	            </div>
	          </div>
	        </div>
	    <?php  }; ?>
        <!-- <div class="col-xs-18 col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="../img/pokemon-trespass.jpg" alt="pokemon go">
              <div class="caption">
                <h4>Pokemon Go</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
            </div>
          </div>
        </div>

        <div class="col-xs-18 col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="../img/yolo.png" alt="yolo">
              <div class="caption">
                <h4>YOLO</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
            </div>
          </div>
        </div>
 -->
      
        </div>
        
      </div><!-- End row -->
      
    </div><!-- End container -->
				
			</div>
		</div>

	</section>

</div>