<?php 
?>
<div class="container-fluid col-sm-10">
	<div class="row text-center">
		<h1>Enter Pokemon for this team:</h1>
		<h4 class="alert"><?= $_POST['MESSAGE'] ?></h4>
		<form method="POST" action="" data-validation data-required-message="This field is required">
			<div class="form-group col-sm-4">
				<p>Pokemon 1</p>
			    <input type="text" class="form-control insert-pokemon" name="member[1]" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="form-group col-sm-4">
				<p>Pokemon 2</p>
			    <input type="text" class="form-control insert-pokemon" name="member[2]" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="form-group col-sm-4">
				<p>Pokemon 3</p>
			    <input type="text" class="form-control insert-pokemon" name="member[3]" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="form-group col-sm-4">
				<p>Pokemon 4</p>
			    <input type="text" class="form-control insert-pokemon" name="member[4]" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="form-group col-sm-4">
				<p>Pokemon 5</p>
			    <input type="text" class="form-control insert-pokemon" name="member[5]" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="form-group col-sm-4">
				<p>Pokemon 6</p>
			    <input type="text" class="form-control insert-pokemon" name="member[6]" placeholder="Enter Name or Number" data-required>
			</div>
			<div class="text-center">
				<input type="submit" onclick="return confirm('Update Team with Selected Pokemon?')" />
				<(^.^<)
				<input value="Delete" name="TEAM_DELETED" type="submit" onclick="return confirm('Permenantly Delete This Team?')" />
			</div>
		</form>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="text-center">
			<p class="text-center"><h3>Click a row to choose Pokemon for your team</h3></p>
		<?php require_once __DIR__ . '/../partials/table.php' ?>
			<hr>
		</div>
	</div>
</div>