<div class="col-sm-10 text-center">
	<div>
		<h1>All User's Teams</h1>
	</div>
	<hr>
	<?php foreach ($_SESSION['ALL_TEAMS'] as $teamId) : ?>
	<?php extract(displayTeamById($teamId)); ?>
	<div class="col-sm-4">
		<a class="all-teams-table" href="visit-team?team=<?= $teamId ?>">
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