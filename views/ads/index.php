<!--Page for an index of advertisements-->

<div class='container-fluid topMargin'>
    <div class="row">
    
        <?PHP foreach ($results as $result) : ?>
            <div class="card" style="width: 20rem;">
                <a href="#"><img class="card-img-top" src="https://images-cdn.9gag.com/photo/aGwd2jn_700b.jpg" alt="Card image cap" style="width: 100%"></a>
                <div class="card-block">
                    <a href="#"><h4 class="card-title"><?=htmlspecialchars(strip_tags($result['name'])) ?></h4></a>
                    <p class="card-text"><?=htmlspecialchars(strip_tags($result['description'])) ?></p>
                </div>
            </div>
        <?PHP endforeach; ?>


        
        <!-- Only one row. -->
    </div>
</div>
