<?php require_once 'compare_functions.php' ?>
<div class="container col-sm-12">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <h1 class="text-center">Compare Pokemon</h1>
        <p class="lead text-center"><?= $leftName ?> (<?= $leftPokedex ?>) vs <?= $rightName ?> (<?= $rightPokedex ?>)</p>
        <p class="text-center">Enter Pokedex Number or name for two Pokemon:</p>
        <form role ="form" method="GET" class="text-center">
          <input type="text" name="left" placeholder="<?= $leftName . " -or- " . $leftPokedex ?>">
          <br>
          <input type="text" name="right" placeholder="<?= $rightName . " -or- " . $rightPokedex ?>">
          <br>
          <button class="btn btn-default" type="submit">Compare</button>
        </form>
        <hr>
      </div>
      <div class="col-sm-3"></div>
    </div>
  </div>
  <div class="container-fluid" style ='background-color: #efefef; border-style: outset; padding: 5px;'>
    <div class="row">
      <div class="col-sm-3">
        <img class="img-responsive" style="padding-top:50px; padding-left:10px;" src="../assets/sugimori/<?= $leftPokedex ?>.png">
        <p class="lead text-center"><?= $status['left'] ?></p>
      </div>
      <div class="col-xs-6" style="padding:5px;">
        <canvas id="stats-chart" width="400" height="400"></canvas>
      </div>
      <div class="col-sm-3">
        <img class="img-responsive" style="padding-top:50px; padding-right:10px;" src="../assets/sugimori/<?= $rightPokedex ?>.png">
        <p class="lead text-center"><?= $status['right'] ?></p>
      </div>
    </div>
  </div>
</div>