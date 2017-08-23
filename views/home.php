<section>


    <div class="row jumbodiv">
        <div id="bigLogo"></div>
    
        <p id="signUp"><span>SELL MY OLD STUFF!</span></p>
    </div>
    </section>

<div class="container">
    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
            <!-- Placeholder for featured items.-->
            <?php foreach($ads as $ad): ?>
                <a href="/show?ad=<?php echo($ad->id) ?>">
                    <div class="well text-center col-md-4">
                        <h4><?= $ad->name ?></h4>
                        <p>Description: <?= $ad->description ?></p>
                    </div>                
                </a>
            <?php endforeach; ?>
        </div>

    </section>

</div>
