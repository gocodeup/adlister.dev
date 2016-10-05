<?php

          
$ads = Ad::all();

?>

          <?php foreach ($ads as $ad): ?>
          <tr>
          	<td><?=<img src=""> ?><td>
            <td><?= $ad['name']; ?></td>
            <td><?= $ad['description']; ?></td>
            <td><?= $ad['price']; ?></td>
            <td><?= <a href="$ad['url']";> </a>?></td>
            <td><?= $ad['description']; ?></td>
          </tr>
        <?php endforeach;?>