
<div class="col-sm-10 text-center">
	<div>
		<h1>Select a Team to Visit</h1>
	</div>
	<hr>
	<?php foreach ($_SESSION['USER_TEAMS'] as $teamId) : ?>
	<?php extract(displayTeamById($teamId)); ?>
	<div class="col-sm-4">
		<a class="team-table" href="visit-team?team=<?= $teamId ?>">
			<table>
				<tbody>
					<tr>
						<td><h4>Team Name:</h4></td>
					<tr>
						<td><h3><?= $team_name ?></h3></td>
					</tr>
					<tr>
						<td><img class="img-responsive team_logo" src="../assets/uploads/<?= $logo ?>"></td>
					</tr>
				</tbody>
			</table>
		</a>
	</div>
	<?php endforeach ?>