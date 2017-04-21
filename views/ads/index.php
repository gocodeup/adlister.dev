<!--Page for an index of advertisements-->

<?php 

require_once __DIR__ . "/../../controllers/PageController.php";

 ?>
 <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>

        <?php foreach($adListings as $ad): ?>
            <tbody>
                <tr>
                    <td><a href="/ads/show?id=<?=$ad->id?>"><?= $ad->title?></td>
                    <td><?= $ad->price ?></td>
                    <td><?= $ad->description ?></td>
                    <td><a href="/ads/show?id="><img src="/<?= $ad->image ?>"></td>
                </tr>
            </tbody>
        <?php endforeach; ?>

    </table>
