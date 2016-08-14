<?php 
  $pokemon = new Pokemon();
  $pokedex = $pokemon->createTable();
?>

<div>
  <table class="text-center display" cellspacing="0" width="100%" id="pkmnTable" border="1"
    >
    <thead >
      <tr><?php foreach ($pokedex[0] as $key => $value) : ?>
          <td> <?= $key ?> </td>
        <?php endforeach ?>
      </tr>
    </thead>
    <?php foreach ($pokedex as $pokemon) : ?>
      <tr>
      <?php foreach ($pokemon as $key) : ?>
        <td><?= $key ?></td></a>
      <?php endforeach ?>
      </tr>
    <?php endforeach ?>
  </table>
</div>
