<?php extract(visitTeamController()); 

?>

	<div class="text-center">
	 <h1> <?= $teamName ?> </h1>

	<?php foreach ($memberNames as $member) : ?>
	<div class="col-sm-4">
		<h3><?= $member ?></h3>
		<img class="img-responsive teamMemberImg" src="../assets/sugimori/<?= $pokedexId[$counter] ?>.png">
		<table class="table table-condensed table-striped table-bordered">
			<?php foreach ($stats as $name => $stat) : ?>
				<tr>
					<td><?= $name ?></td>
					<td><?= $stat ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
	<?php $counter++; endforeach ?>
	</div>
	<div class="col-md-2"></div>
	<div class="col-xs-8" style="padding:5px;">
		<canvas id="full-team-compare" width="400" height="400"></canvas>
	</div>
	<form class="col-xs-12 text-center margin-top-10" method="POST" action="/add-members" data-validation>
		<input class="alert" value="Delete Team" name="TEAM_DELETED" type="submit" onclick="return confirm('Permenantly Delete This Team?')" />
	</form>