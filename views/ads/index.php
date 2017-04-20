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
            </tr>
        </thead>

        <?php foreach($adListings as $ad): ?>
            <tbody>
                <tr>
                    <td ><?= $ad->title ?></td>
                    <td><?= $ad->price ?></td>
                    <td><?= $ad->description ?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>

    </table>
