<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Welcome To Adlister</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
            <!-- Placeholder for featured items.-->

            <?php foreach($ads as $ad): ?>
                <a href="/show?ad=<?php echo($ad['id']) ?>">
                    <div class="well text-center col-md-4">
                        <h4><?= $ad['name'] ?></h4>
                        <p>Description: <?= $ad['description'] ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    </section>

</div>