<!--Page for single advertisement -->

<?php $currentAd = MODEL::findAdById((int)$_GET['id']);?>
                    <h5><?= $currentAd['title'] ?></h5>
                    <img src=<?= $currentAd['img']?>>
                    <ul>
                    <li><?= $currentAd['description'] ?></li>
                    <li><?= $currentAd['date_create'] ?></li>
                    </ul>
                    